<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $table = "hosts";

    protected $fillable = [
        'user_id',
        'department_id',
        'company_id',
        'username',
        'fullname',
        'email',
        'phone',
        'status',
    ];
}
