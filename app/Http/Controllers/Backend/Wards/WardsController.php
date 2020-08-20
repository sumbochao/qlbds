<?php

namespace App\Http\Controllers\Backend\Wards;

use App\Models\Wards\Ward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Wards\CreateResponse;
use App\Http\Responses\Backend\Wards\EditResponse;
use App\Repositories\Backend\Wards\WardRepository;
use App\Http\Requests\Backend\Wards\ManageWardRequest;
use App\Http\Requests\Backend\Wards\CreateWardRequest;
use App\Http\Requests\Backend\Wards\StoreWardRequest;
use App\Http\Requests\Backend\Wards\EditWardRequest;
use App\Http\Requests\Backend\Wards\UpdateWardRequest;
use App\Http\Requests\Backend\Wards\DeleteWardRequest;

/**
 * WardsController
 */
class WardsController extends Controller
{
    /**
     * variable to store the repository object
     * @var WardRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param WardRepository $repository;
     */
    public function __construct(WardRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Wards\ManageWardRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageWardRequest $request)
    {
        return new ViewResponse('backend.wards.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateWardRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Wards\CreateResponse
     */
    public function create(CreateWardRequest $request)
    {
        return new CreateResponse('backend.wards.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreWardRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreWardRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.wards.index'), ['flash_success' => trans('alerts.backend.wards.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Wards\Ward  $ward
     * @param  EditWardRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Wards\EditResponse
     */
    public function edit(Ward $ward, EditWardRequest $request)
    {
        return new EditResponse($ward);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateWardRequestNamespace  $request
     * @param  App\Models\Wards\Ward  $ward
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateWardRequest $request, Ward $ward)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $ward, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.wards.index'), ['flash_success' => trans('alerts.backend.wards.updated')]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteWardRequestNamespace  $request
     * @param  App\Models\Wards\Ward  $ward
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Ward $ward, DeleteWardRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($ward);
        //returning with successfull message
        return new RedirectResponse(route('admin.wards.index'), ['flash_success' => trans('alerts.backend.wards.deleted')]);
    }
    
}
