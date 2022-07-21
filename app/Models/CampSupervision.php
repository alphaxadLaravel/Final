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
        return $this->belongs(Host::class);
    }
    public function company()
    {
        return $this->belongs(Company::class);
    }
    public function student()
    {
        return $this->belongs(Student::class);
    }
}
