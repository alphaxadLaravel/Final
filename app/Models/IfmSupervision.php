<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IfmSupervision extends Model
{
    use HasFactory;

    protected $table = "ifm_supervisions";

    protected $fillable = [
        'supervisor_id',
        'student_id',
        'faculty_id',
        'status',
    ];

    // Supervison belonngs to Supervisor
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

     // Supervison belongs to student
     public function student()
     {
         return $this->belongsTo(Student::class);
     }

}
