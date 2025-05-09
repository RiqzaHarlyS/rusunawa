<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    protected $table = 'penghuni';

    protected $fillable = [
        'formulir_npm',
        'kamar_id',
        'tahun_masuk'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function formulir()
    {
        return $this->belongsTo(Formulir::class, 'formulir_npm', 'npm');
    }
}
