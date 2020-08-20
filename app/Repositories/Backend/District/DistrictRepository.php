<?php

namespace App\Repositories\Backend\District;

use DB;
use Carbon\Carbon;
use App\Models\District\District;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DistrictRepository.
 */
class DistrictRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = District::class;

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
                config('module.districts.table').'.id',
                config('module.districts.table').'.name',
                config('module.districts.table').'.created_at',
                config('module.districts.table').'.updated_at',
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
        if (District::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.districts.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param District $district
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(District $district, array $input)
    {
    	if ($district->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.districts.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param District $district
     * @throws GeneralException
     * @return bool
     */
    public function delete(District $district)
    {
        if ($district->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.districts.delete_error'));
    }
}
