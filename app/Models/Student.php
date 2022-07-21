<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable = [
        'user_id',
        'course_id',
        'faculty_id',
        'username',
        'fullname',
        'year',
        'level',
        'email',
        'phone',
        'status',
    ];

    // Student belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

     // Student belongs to a faculty
     public function faculty()
     {
         return $this->belongsTo(Faculty::class);
     }

     // Student is also the user of the yssteem
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     // Student has one supervision
     public function ifm_supervision()
     {
         return $this->hasOne(IfmSupervision::class);
     }
}
