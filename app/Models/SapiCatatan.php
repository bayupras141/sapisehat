<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SapiCatatan extends Model
{
    use HasFactory;

    protected $table = "sapi_catatan";
    protected $fillable = ["sapi_id", "tanggal", "catatan"];
}
