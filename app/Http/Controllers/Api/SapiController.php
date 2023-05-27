<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sapi;
use App\Models\SapiRecord;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SapiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "image" => "required|string",
            "value" => "required|numeric",
            "device_id" => "required",
        ]);

        if ($validate->fails()) {
            Log::alert($validate->messages()->first());

            return response()->json([
                "status" => false,
                "message" => $validate->messages()->first()
            ]);
        }

        $sapi = Sapi::where('device', $request->device_id)->first();
        if (!$sapi) {
            Log::alert("Alat dengan id " . $request->device_id . " tidak ditemukan");

            return response()->json([
                "status" => false,
                "message" => "Alat dengan id " . $request->device_id . " tidak ditemukan"
            ]);
        }

        // Upload Image
        $folderPath = "uploads/";

        $base64Image = explode(";base64,", $request->image);
        $explodeImage = explode("image/", $base64Image[0]);
        $imageType = $explodeImage[1];
        $image_base64 = base64_decode($base64Image[1]);
        $file = $folderPath . uniqid() . '. ' . $imageType;

        file_put_contents($file, $image_base64);
        // End Upload Image

        $condition = 0;
        if ($request->value < 50) {
            $condition = 1;
        }

        $data = [
            "sapi_id" => $sapi->id,
            "image" => $file,
            "value" => $request->value,
            "status" => $condition
        ];

        DB::beginTransaction();
        try {
            $sapi->status = $condition;
            $sapi->image = $file;
            if (SapiRecord::create($data) && $sapi->save()) {
                DB::commit();
                return response()->json([
                    "status" => true,
                    "message" => "Berhasil disimpan"
                ]);
            }
        } catch (\Throwable $th) {
        }
        
        unlink(public_path($file));
        DB::rollBack();
        return response()->json([
            "status" => false,
            "message" => "Gagal disimpan"
        ]);
    }
}
