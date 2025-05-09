<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'nomor_kamar',
        'lantai',
        'kapasitas',
        'status',
    ];

    public function penghuni()
    {
        return $this->hasMany(Penghuni::class, 'kamar_id');
    }
}


