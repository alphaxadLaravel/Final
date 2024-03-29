<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = "courses";
    
    protected $fillable = [
        'faculty_id',
        'course',
        'inshort',
        'lvel',
        'status',
    ];

    public function student_request()
    {
        return $this->hasmany(StudentRequest::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
