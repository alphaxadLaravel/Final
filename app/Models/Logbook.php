<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;
    protected $table = "logbooks";

    protected $fillable = [
        'student_id',
        'host_id',
        'supervisor_id',
        'week',
        'day',
        'task',
        'lesson',
        'status',
    ];

}
