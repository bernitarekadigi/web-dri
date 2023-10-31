<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prd extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function detailprd()
    {
        return $this->hasMany(DetailPrd::class, 'company_id', 'id');
    }
    public function fitur()
    {
        return $this->hasMany(Feature::class, 'company_id', 'id');
    }
    public function target()
    {
        return $this->hasMany(Target::class, 'company_id', 'id');
    }
}
