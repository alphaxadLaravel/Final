<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $table = "wards";

    protected $fillable = [
        'ward',
        'district_id',
    ];

    public function brellah()
    {
        return $this->hasMany(Brellah::class);
    }
}
