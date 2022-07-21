<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $table = "letters";
    protected $fillable = [
        'faculty_id',
        'hod_id',
        'path',
        'status',
    ];
}
