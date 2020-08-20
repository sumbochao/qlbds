<?php

namespace App\Http\Responses\Backend\Wards;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Wards\Ward
     */
    protected $wards;

    /**
     * @param App\Models\Wards\Ward $wards
     */
    public function __construct($wards)
    {
        $this->wards = $wards;
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
        return view('backend.wards.edit')->with([
            'wards' => $this->wards
        ]);
    }
}