<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRequest extends Model
{
    use HasFactory;
    protected $table = "student_requests";

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

     // the request beongs to a faculty
     public function faculty()
     {
         return $this->belongsTo(Faculty::class);
     }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function hr()
    {
        return $this->belongsTo(HR::class);
    }

    public function response()
    {
        return $this->hasMany(Response::class);
    }


}
