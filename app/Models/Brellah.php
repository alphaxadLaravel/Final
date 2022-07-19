<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brellah extends Model
{
    use HasFactory;
    protected $table = "brellahs";

    protected $fillable = [
        'company',
        'regNumber',
        'about',
        'email',
        'phone',
        'region_id',
        'district_id',
        'ward_id',
        'status'
    ];
}
