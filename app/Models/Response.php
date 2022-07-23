<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = "responses";

    protected $fillable = [
        'student_request_id',
        'student_id',
        'company_id',
        'faculty_id',
        'status',
    ];

    public function student_request()
    {
        return $this->belongsTo(StudentRequest::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

}
