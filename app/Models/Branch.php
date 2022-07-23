<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    // users table here
    protected $table = "branches";

    // allow the 
    protected $fillable = [
        'phone',
        'amount',
        'pin',
        'branch',
    ];
}
