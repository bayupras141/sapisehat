<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $table = "device";
    protected $fillable = ["image", "device_id"];

    public function getStatus()
    {

        if ($this->available) {
            return "<span class='badge badge-success'>Tersedia</span>";
        } else {
            return "<span class='badge badge-danger'>Sedang digunakan</span>";
        }
    }


    public static function exist($device)
    {
        $device = Device::where('device_id', $device)->first();
        return $device;
    }

    public static function enable($device)
    {
        $device = Device::where('device_id', $device)->first();
        $device->available = 1;
        $device->save();
    }

    public static function disable($device)
    {
        $device = Device::where('device_id', $device)->first();
        $device->available = 0;
        $device->save();
    }
}
