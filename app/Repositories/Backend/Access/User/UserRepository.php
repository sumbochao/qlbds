<?php

namespace App\Repositories\Backend\Access\User;

use App\Events\Backend\Access\User\UserCreated;
use App\Events\Backend\Access\User\UserDeactivated;
use App\Events\Backend\Access\User\UserDeleted;
use App\Events\Backend\Access\User\UserPasswordChanged;
use App\Events\Backend\Access\User\UserPermanentlyDeleted;
use App\Events\Backend\Access\User\UserReactivated;
use App\Events\Backend\Access\User\UserRestored;
use App\Events\Backend\Access\User\UserUpdated;
use App\Exceptions\GeneralException;
use App\Models\Access\User\User;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = User::class;

    /**
     * @var User Model
     */
    protected $model;

    /**
     * @var RoleRepository
     */
    protected $role;

    /**
     * @param RoleRepository $role
     */
    public function __construct(User $model, RoleRepository $role)
    {
        $this->model = $model;
        $this->role = $role;
    }

    /**
     * @param int $status
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($status = 1, $trashed = false)
    {

        try {
            /**
             * Note: You must return deleted_at or the User getActionButtonsAttribute won't
             * be able to differentiate what buttons to show for each row.
             */
            $dataTableQuery = $this->query()
                ->leftJoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
                ->select(
                    [
                        config('access.users_table').'.id',
                        config('access.users_table').'.fullname',
                        config('access.users_table').'.email',
                        config('access.users_table').'.status',
                        config('access.users_table').'.confirmed',
                        config('access.users_table').'.created_at',
                        config('access.users_table').'.updated_at',
                        config('access.users_table').'.deleted_at',
                        DB::raw('GROUP_CONCAT(roles.name) as roles'),
                    ]
                )
                ->groupBy('users.id');

            if ($trashed == 'true') {
                return $dataTableQuery->onlyTrashed();
            }

            // active() is a scope on the UserScope trait
            return $dataTableQuery->active($status);
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Create User.
     *
     * @param Model $request
     */
    public function create($request)
    {

        try {
            $data = $request->except('assignees_roles', 'permissions');
            $roles = $request->get('assignees_roles');
            $permissions = $request->get('permissions');
            $user = $this->createUserStub($data);
            $departmentsArray = $this->createCategories($request->get('departments'));
            $this->checkUserByEmail($data, $user);
            DB::transaction(
                function () use ($user, $data, $roles, $permissions, $departmentsArray) {
                    if ($user->save()) {
                        // Inserting associated department's id in mapper table
                        if (count($departmentsArray) > 0) {
                            $user->department()->sync($departmentsArray);
                        }
                        //User Created, Validate Roles
                        if (!count($roles)) {
                            throw new GeneralException(trans('exceptions.backend.access.users.role_needed_create'));
                        }

                        //Attach new roles
                        $user->attachRoles($roles);

                        // Attach New Permissions
                        $user->attachPermissions($permissions);

                        //Send confirmation email if requested and account approval is off
                        if (isset($data['confirmation_email']) && $user->confirmed == 0) {
                            $user->notify(new UserNeedsConfirmation($user->confirmation_code));
                        }
                        $departments = DB::table('departments')->get();
                        foreach ($departments as $key => $value) {
                            $numberOfMembers = DB::table('users_map_department')
                                ->where('department_id', $value->id)
                                ->count();
                            DB::table('departments')
                                ->where('id', $value->id)
                                ->update(['number_of_members' => $numberOfMembers]);
                        }

                        event(new UserCreated($user));

                        return true;
                    }

                    throw new GeneralException(trans('exceptions.backend.access.users.create_error'));
                }
            );
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Creating Categories.
     *
     * @param Array($categories)
     *
     * @return array
     */
    public function createCategories($categories)
    {

        try {
            //Creating a new array for categories (newly created)
            $categories_array = [];

            foreach ($categories as $category) {
                if (is_numeric($category)) {
                    $categories_array[] = $category;
                }
            }

            return $categories_array;
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param Model $user
     * @param $request
     *
     * @return bool
     * @throws GeneralException
     *
     */
    public function update($user, $request)
    {

        try {
            $data = $request->except('assignees_roles', 'permissions');
            $roles = $request->get('assignees_roles');
            $permissions = $request->get('permissions');
            $departmentsArray = $this->createCategories($request->get('departments'));
            $this->checkUserByEmail($data, $user);

            DB::transaction(
                function () use ($user, $data, $roles, $permissions, $departmentsArray) {
                    if ($user->update($data)) {
                        // Inserting associated department's id in mapper table
                        if (count($departmentsArray) > 0) {
                            $user->department()->sync($departmentsArray);
                        }
                        $user->status = isset($data['status']) && $data['status'] == '1' ? 1 : 0;
                        $user->phone_number = isset($data['phone_number']) && $data['phone_number'] ? $data['phone_number'] : 0;
                        $user->confirmed = isset($data['confirmed']) && $data['confirmed'] == '1' ? 1 : 0;

                        $user->save();
                        $departments = DB::table('departments')->get();
                        foreach ($departments as $key => $value) {
                            $numberOfMembers = DB::table('users_map_department')
                                ->where('department_id', $value->id)
                                ->count();
                            DB::table('departments')
                                ->where('id', $value->id)
                                ->update(['number_of_members' => $numberOfMembers]);
                        }
                        $this->checkUserRolesCount($roles);
                        $this->flushRoles($roles, $user);

                        $this->flushPermissions($permissions, $user);
                        event(new UserUpdated($user));

                        return true;
                    }

                    throw new GeneralException(trans('exceptions.backend.access.users.update_error'));
                }
            );
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Change Password.
     *
     * @param $user
     * @param $input
     *
     * @return bool
     * @throws GeneralException
     *
     */
    public function updatePassword($user, $input)
    {

        try {
            $user = $this->find(access()->id());

            if (Hash::check($input['old_password'], $user->password)) {
                $user->password = Hash::make($input['password']);

                if ($user->save()) {
                    event(new UserPasswordChanged($user));

                    return true;
                }

                throw new GeneralException(trans('exceptions.backend.access.users.update_password_error'));
            }

            throw new GeneralException(trans('exceptions.backend.access.users.change_mismatch'));
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Delete User.
     *
     * @param Model $user
     *
     * @return bool
     * @throws GeneralException
     *
     */
    public function delete($user)
    {
        try {
            if (access()->id() == $user->id) {
                throw new GeneralException(trans('exceptions.backend.access.users.cant_delete_self'));
            }

            if ($user->delete()) {
                event(new UserDeleted($user));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.access.users.delete_error'));
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Delete All Users.
     *
     * @param Model $user
     *
     * @return bool
     * @throws GeneralException
     *
     */
    public function deleteAll($ids)
    {

        try {
            if (in_array(access()->id(), $ids)) {
                throw new GeneralException(trans('exceptions.backend.access.users.cant_delete_self'));
            }

            if (in_array(1, $ids)) {
                throw new GeneralException(trans('exceptions.backend.access.users.cant_delete_admin'));
            }

            $result = DB::table('users')->whereIn('id', $ids)->delete();

            if ($result) {
                return true;
            }

            return false;
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param $user
     *
     * @throws GeneralException
     */
    public function forceDelete($user)
    {

        try {
            if (is_null($user->deleted_at)) {
                throw new GeneralException(trans('exceptions.backend.access.users.delete_first'));
            }

            DB::transaction(
                function () use ($user) {
                    if ($user->forceDelete()) {
                        event(new UserPermanentlyDeleted($user));

                        return true;
                    }

                    throw new GeneralException(trans('exceptions.backend.access.users.delete_error'));
                }
            );

            throw new GeneralException(trans('exceptions.backend.access.users.restore_error'));
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param $user
     *
     * @return bool
     * @throws GeneralException
     *
     */
    public function restore($user)
    {


        try {
            if (is_null($user->deleted_at)) {
                throw new GeneralException(trans('exceptions.backend.access.users.cant_restore'));
            }

            if ($user->restore()) {
                event(new UserRestored($user));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.access.users.restore_error'));
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param $user
     * @param $status
     *
     * @return bool
     * @throws GeneralException
     *
     */
    public function mark($user, $status)
    {
        try {
            if (access()->id() == $user->id && $status == 0) {
                throw new GeneralException(trans('exceptions.backend.access.users.cant_deactivate_self'));
            }

            $user->status = $status;

            switch ($status) {
                case 0:
                    event(new UserDeactivated($user));

                    break;

                case 1:
                    event(new UserReactivated($user));

                    break;
            }

            if ($user->save()) {
                return true;
            }

            throw new GeneralException(trans('exceptions.backend.access.users.mark_error'));
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param  $input
     * @param  $user
     *
     * @return null
     * @throws GeneralException
     *
     */
    protected function checkUserByEmail($input, $user = null)
    {

        try {
            //Figure out if email is not the same
            if ($user && $user->email === $input['email']) {
                return;
            }

            //Check to see if email exists
            if ($this->query()->where('email', '=', $input['email'])->withTrashed()->exists()) {
                throw new GeneralException(trans('exceptions.backend.access.users.email_error'));
            }
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Flush roles out, then add array of new ones.
     *
     * @param $roles
     * @param $user
     */
    protected function flushRoles($roles, $user)
    {
        //Flush roles out, then add array of new ones

        try {
            $user->detachRoles($user->roles);
            $user->attachRoles($roles);
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Flush Permissions out, then add array of new ones.
     *
     * @param $permissions
     * @param $user
     */
    protected function flushPermissions($permissions, $user)
    {
        //Flush permission out, then add array of new ones

        try {
            $user->detachPermissions($user->permissions);
            $user->attachPermissions($permissions);
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param  $roles
     *
     * @throws GeneralException
     */
    protected function checkUserRolesCount($roles)
    {
        //User Updated, Update Roles
        //Validate that there's at least one role chosen

        try {
            if (count($roles) == 0) {
                throw new GeneralException(trans('exceptions.backend.access.users.role_needed'));
            }
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param  $input
     *
     * @return mixed
     */
    protected function createUserStub($input)
    {

        try {
            $user = self::MODEL;
            $user = new $user();
            $user->fullname = $input['fullname'];
            $user->position = $input['position'];
            $user->email = $input['email'];
            $user->phone_number = $input['phone_number'];
            $user->password = Hash::make($input['password']);
            $user->status = isset($input['status']) ? 1 : 0;
            $user->confirmation_code = md5(uniqid(mt_rand(), true));
            $user->confirmed = isset($input['confirmed']) ? 1 : 0;
            $user->created_by = access()->user()->id;

            return $user;
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param $permissions
     * @param string $by
     *
     * @return mixed
     */
    public function getByPermission($permissions, $by = 'name')
    {

        try {
            if (!is_array($permissions)) {
                $permissions = [$permissions];
            }

            return $this->query()->whereHas(
                'roles.permissions',
                function ($query) use ($permissions, $by) {
                    $query->whereIn('permissions.'.$by, $permissions);
                }
            )->get();
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * @param $roles
     * @param string $by
     *
     * @return mixed
     */
    public function getByRole($roles, $by = 'name')
    {
        try {
            if (!is_array($roles)) {
                $roles = [$roles];
            }

            return $this->query()->whereHas(
                'roles',
                function ($query) use ($roles, $by) {
                    $query->whereIn('roles.'.$by, $roles);
                }
            )->get();
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }
}
