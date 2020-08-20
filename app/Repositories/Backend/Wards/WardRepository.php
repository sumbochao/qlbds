<?php

namespace App\Repositories\Backend\Wards;

use DB;
use Carbon\Carbon;
use App\Models\Wards\Ward;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WardRepository.
 */
class WardRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Ward::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.wards.table').'.id',
                config('module.wards.table').'.created_at',
                config('module.wards.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        if (Ward::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.wards.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Ward $ward
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Ward $ward, array $input)
    {
    	if ($ward->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.wards.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Ward $ward
     * @throws GeneralException
     * @return bool
     */
    public function delete(Ward $ward)
    {
        if ($ward->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.wards.delete_error'));
    }
}
