<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HOD extends Model
{
    use HasFactory;
    protected $table = "h_o_d_s";

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
