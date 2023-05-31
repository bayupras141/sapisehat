<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SapiVaksin extends Model
{
    use HasFactory;

    const LIST_VAKSIN = [
        0 => "VAKSIN A",
        1 => "VAKSIN B",
        2 => "VAKSIN C",
    ];

    protected $table = "sapi_vaksin";
    protected $fillable = ["sapi_id", "dosis", "jenis", "tanggal"];

    public function getJenisVaksinLabelAttribute() {
        return self::LIST_VAKSIN[$this->jenis];
    }
}
