<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = "districts";

    protected $fillable = [
        'district',
        'region_id',
    ];

    // Student belongd to user
    // public function field(){
    //     return $this->hasMany(Field::class);
    // }
}
