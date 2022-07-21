<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $table = "supervisors";

    protected $fillable = [
        'user_id',
        'faculty_id',
        'username',
        'fullname',
        'email',
        'phone',
        'status',
    ];
}
