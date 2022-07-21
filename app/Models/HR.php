<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
    use HasFactory;
    protected $table = "h_r_s";

    protected $fillable = [
        'user_id',
        'username',
        'email',
        'phone',
        'status'
    ];

    public function student_request()
    {
        return $this->hasMany(HR::class);
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }
}
