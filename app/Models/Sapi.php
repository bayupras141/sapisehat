<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    use HasFactory;

    const GENDERS = [
        "JANTAN", "BETINA"
    ];
    const CONDITIONS = [
        0 => "<span class='badge badge-success'>SEHAT</span",
        1 => "<span class='badge badge-danger'>TERINDIKASI PMK</span>"
    ];

    protected $table = "sapi";
    protected $fillable = ["kode", "gender", "device", "user_id"];


    public function scopeActive($query)
    {
        return $query->where('flag', 1);
    }

    public function scopeMe($query)
    {
        $user = auth()->user();
        if ($user->role == "admin") {
            return $query;
        }

        return $query->where('user_id', $user->id);
    }

    public function getCondition()
    {
        return isset(self::CONDITIONS[$this->status]) ? self::CONDITIONS[$this->status] : "<span class='badge badge-default'>Belum Diketahui</span>";
    }

    public function getUrlAttribute()
    {
        return $this->image ? asset($this->image) : 'http://via.placeholder.com/640x640';
    }

    public function catatan()
    {
        return $this->hasMany(SapiCatatan::class);
    }

    public function vaksin()
    {
        return $this->hasMany(SapiVaksin::class);
    }

    public function records()
    {
        return $this->hasMany(SapiRecord::class);
    }

    public function getNextDosis()
    {
        return $this->vaksin()->count() + 1;
    }
}
