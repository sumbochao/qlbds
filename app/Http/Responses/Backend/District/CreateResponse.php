<?php

namespace App\Http\Responses\Backend\District;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable
{
    protected $provinces;

    public function __construct($provinces)
    {
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
        return view('backend.districts.create')->with([
            'provinces' => $this->provinces
        ]);
    }
}