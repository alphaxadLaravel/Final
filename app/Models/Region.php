<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = "regions";

    protected $fillable = [
        'regions',
    ];

    // Student belongd to user
    // public function field(){
    //     return $this->hasMany(Field::class);
    // }
}
