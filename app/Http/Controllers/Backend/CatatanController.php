<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SapiCatatanRequest;
use App\Http\Requests\SapiRequest;
use App\Models\Sapi;
use App\Models\SapiCatatan;
use App\Models\User;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(SapiCatatanRequest $request, Sapi $sapi)
    {
        $request->request->add(['sapi_id' => $sapi->id]);

        $catatan = new SapiCatatan();
        $catatan->create($request->all());
        return redirect()->route('backend.sapi.show', compact('sapi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sapi $sapi, SapiCatatan $catatan)
    {
        $catatan->delete();
        return redirect()->route('backend.sapi.show', compact('sapi'));
    }
}
