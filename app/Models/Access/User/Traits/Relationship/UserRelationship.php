<?php

namespace App\Models\Access\User\Traits\Relationship;

use App\Models\Access\User\SocialLogin;
use App\Models\System\Session;
use App\Models\Access\User\User;
use App\Models\UsersMapDepartment\UsersMapDepartment;
use App\Models\Department\Department;
/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    public function __construct()
{
    set_time_limit(8000000);
}
    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(config('access.role'), config('access.role_user_table'), 'user_id', 'role_id');
    }

    public function department(){
      //  return $this->belongsToMany(UsersMapDepartment::class,"users_map_department");//->withPivot('user_id', 'department_id');
        return $this->belongsToMany(Department::class, "users_map_department", 'user_id', 'department_id')->withTimestamps();//->withPivot('user_id', 'department_id');
       // return $this->belongsToMany(config('access.department'), config('access.department_user_table'), 'user_id', 'department_id');
    }

    /**
     * Many-to-Many relations with Permission.
     * ONLY GETS PERMISSIONS ARE NOT ASSOCIATED WITH A ROLE.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(config('access.permission'), config('access.permission_user_table'), 'user_id', 'permission_id');
    }

    /**
     * @return mixed
     */
    public function providers()
    {
        return $this->hasMany(SocialLogin::class);
    }

    /**
     * @return mixed
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
