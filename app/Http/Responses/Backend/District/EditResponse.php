<?php

namespace App\Http\Responses\Backend\District;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\District\District
     */
    protected $districts;

    /**
     * @param App\Models\District\District $districts
     */
    public function __construct($districts)
    {
        $this->districts = $districts;
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
        return view('backend.districts.edit')->with([
            'districts' => $this->districts
        ]);
    }
}