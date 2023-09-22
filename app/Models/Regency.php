<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_unique_id', 'unique_id');
    }

    public function district()
    {
        return $this->hasMany(District::class, 'district_unique_id', 'unique_id');
    }
}
