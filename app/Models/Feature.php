<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
    public function prd()
    {
        return $this->belongsTo(Prd::class, 'prd_id', 'id');
    }
}
