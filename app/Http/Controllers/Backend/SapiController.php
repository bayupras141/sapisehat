<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SapiRequest;
use App\Models\Device;
use App\Models\Sapi;
use App\Models\User;
use Illuminate\Http\Request;

class SapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Sapi::me()->active()->paginate();
        return view('backend.sapi.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Sapi::GENDERS;
        return view('backend.sapi.create', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SapiRequest $request)
    {
        $user = auth()->user();
        $request->request->add(['user_id' => $user->id]);

        // check device_id
        $device = Device::exist('device_id', $request->device);
        if (!$device) {
            return redirect()->back()->withErrors(['device_id' => 'Device Tidak Ditemukan']);
        } else if (!$device->available) {
            return redirect()->back()->withErrors(['device_id' => 'Device Sedang Digunakan']);
        }

        Device::disable($request->device);

        $sapi = new Sapi();
        $sapi->create($request->all());
        return redirect()->route('backend.sapi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sapi $sapi)
    {
        return view('backend.sapi.show', compact('sapi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sapi $sapi)
    {
        $genders = Sapi::GENDERS;
        return view('backend.sapi.edit', compact('sapi', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SapiRequest $request, Sapi $sapi)
    {
        // change status
        if ($request->device != $sapi->device) {
            $device = Device::exist($request->device);
            if (!$device) {
                return redirect()->back()->withErrors(['device_id' => 'Device Tidak Ditemukan']);
            } else if (!$device->available) {
                return redirect()->back()->withErrors(['device_id' => 'Device Sedang Digunakan']);
            }

            Device::disable($request->device);
            Device::enable($sapi->device);
        }

        $sapi->update($request->all());
        return redirect()->route('backend.sapi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sapi $sapi)
    {
        $sapi->flag = 0;
        $sapi->save();

        Device::enable($sapi->device);

        return redirect()->route('backend.sapi.index');
    }


    private function _myOwnSapi(Sapi $sapi)
    {
        $user = auth()->user();
        if ($user->id !== $sapi->user_id) {
            return abort(403, 'Sapi ini bukan punya anda');
        }
    }
}
