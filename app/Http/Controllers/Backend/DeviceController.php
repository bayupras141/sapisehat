<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeviceRequest;
use App\Models\Device;
use App\Models\Sapi;
use App\Models\User;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Device::paginate();
        return view('backend.device.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.device.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeviceRequest $request)
    {
        $device = new Device;
        $request->uploadImage();
        $device->create($request->all());
        return redirect()->route('backend.device.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        return view('backend.device.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeviceRequest $request, Device $device)
    {
        $request->uploadImage();
        $device->update($request->all());
        return redirect()->route('backend.device.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        $sapi = Sapi::where('device', $device->device_id)->first();
        if ($sapi) {
            $sapi->flag = 0;
            $sapi->save();
        }

        $device->delete();
        return redirect()->route('backend.device.index');
    }
}
