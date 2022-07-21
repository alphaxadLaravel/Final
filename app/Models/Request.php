<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = "requests";

    protected $fillable = [
        'faculty_id',
        'course_id',
        'company_id',
        'hr_id',
        'students',
        'startDate',
        'endDate',
        'status',
    ];

}
