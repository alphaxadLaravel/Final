<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "companies";

    protected $fillable = [
        'brellah_id',
        'hr_id',
    ];

    public function student_request()
    {
        return $this->hasMany(StudentRequest::class);
    }

    public function brellah()
    {
        return $this->belongsTo(Brellah::class);
    }
    public function hr()
    {
        return $this->belongsTo(HR::class);
    }
    public function field()
    {
        return $this->hasMany(Field::class);
    }
}
