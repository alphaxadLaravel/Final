<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampSupervision extends Model
{
    use HasFactory;

    protected $table = "camp_supervisions";

    protected $fillable = [
        'host_id',
        'student_id',
        'company_id',
        'department_id',
        'status',
    ];

    public function host()
    {
        return $this->belongsTo(Host::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
