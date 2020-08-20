<?php

namespace App\Http\Responses\Backend\District;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\District\District
     */
    protected $districts;
    protected $provinces;

    /**
     * @param App\Models\District\District $districts
     */
    public function __construct($districts,$provinces)
    {
        $this->districts = $districts;
        $this->provinces = $provinces;
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
        $selectedprovinces = $this->districts->pluck('provinces_id')->toArray();

      //  dd($selectedprovinces);
        return view('backend.districts.edit')->with([
            'districts' => $this->districts,
            'selectedProvinces' => $selectedprovinces,
            'provinces' => $this->provinces
        ]);
    }
}