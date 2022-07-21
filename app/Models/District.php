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

    public function brellah()
    {
        return $this->hasMany(Brellah::class);
    }}
