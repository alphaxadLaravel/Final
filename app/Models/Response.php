<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = "responses";

    protected $fillable = [
        'request_id',
        'student_id',
        'company_id',
        'company_id',
        'faculty_id',
        'status',
    ];

}
