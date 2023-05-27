<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SapiRecord extends Model
{
    use HasFactory;

    protected $table = "sapi_record";
    protected $fillable = ["sapi_id", "image", "value", "status"];
}
