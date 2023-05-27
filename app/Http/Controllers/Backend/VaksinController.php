<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SapiVaksinRequest;
use App\Http\Requests\SapiRequest;
use App\Models\Sapi;
use App\Models\SapiVaksin;
use App\Models\User;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(SapiVaksinRequest $request, Sapi $sapi)
    {
        $request->request->add(['sapi_id' => $sapi->id]);

        $vaksin = new SapiVaksin();
        $vaksin->create($request->all());
        return redirect()->route('backend.sapi.show', compact('sapi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sapi $sapi, SapiVaksin $vaksin)
    {
        $vaksin->delete();
        return redirect()->route('backend.sapi.show', compact('sapi'));
    }
}
