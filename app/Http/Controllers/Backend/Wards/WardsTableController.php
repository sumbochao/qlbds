<?php

namespace App\Http\Controllers\Backend\Wards;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Wards\WardRepository;
use App\Http\Requests\Backend\Wards\ManageWardRequest;

/**
 * Class WardsTableController.
 */
class WardsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var WardRepository
     */
    protected $ward;

    /**
     * contructor to initialize repository object
     * @param WardRepository $ward;
     */
    public function __construct(WardRepository $ward)
    {
        $this->ward = $ward;
    }

    /**
     * This method return the data of the model
     * @param ManageWardRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageWardRequest $request)
    {
        return Datatables::of($this->ward->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($ward) {
                return Carbon::parse($ward->created_at)->toDateString();
            })
            ->addColumn('actions', function ($ward) {
                return $ward->action_buttons;
            })
            ->make(true);
    }
}
