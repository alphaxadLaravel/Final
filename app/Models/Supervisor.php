<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $table = "supervisors";

    protected $fillable = [
        'user_id',
        'faculty_id',
        'username',
        'fullname',
        'email',
        'phone',
        'status',
    ];

    // supervisor hasmany students
    public function student()
    {
        return $this->hasMany(Student::class);
    }

    // He has many Supervisions at IFM only
    public function ifm_supervision()
    {
        return $this->hasMany(IfmSupervision::class);
    }

    // He belongs to cetan faculty
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    // He is the system users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function field()
    {
        return $this->hasMany(Field::class);
    }
}
