<?php

namespace App\Http\Responses\Backend\Department;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Department\Department
     */
    protected $departments;

    /**
     * @param App\Models\Department\Department $departments
     */
    public function __construct($departments)
    {
        $this->departments = $departments;
    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.departments.edit')->with([
            'departments' => $this->departments
        ]);
    }
}