<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'regency_unique_id', 'unique_id');
    }

    public function subDistrictA()
    {
        return $this->hasMany(SubDistricta::class, 'district_unique_id', 'unique_id');
    }
    public function subDistrictb()
    {
        return $this->hasMany(SubDistrictb::class);
    }
    public function subDistrictc()
    {
        return $this->hasMany(SubDistrictc::class);
    }
}
