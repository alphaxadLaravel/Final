<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "departments";

    protected $fillable = [
        'company_id',
        'department',
        'status',
    ];

    public function field()
    {
        return $this->hasMany(Field::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
