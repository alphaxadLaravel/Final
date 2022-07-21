<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $table = "fields";

    protected $fillable = [
        'student_id',
        'company_id',
        'department_id',
        'host_id',
        'gotway',
        'status',
    ];

}
