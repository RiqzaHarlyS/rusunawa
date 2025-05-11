<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk menetapkan nama tabel secara eksplisit
    protected $table = 'formulir';
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';

    // Tambahkan fillable jika kamu menggunakan mass assignment
    protected $fillable = [
        'nama_lengkap',
        'npm',
        'jurusan',
        'fakultas',
        'alamat',
        'desa',
        'kota',
        'provinsi',
        'nomor_whatsapp',
        'email',
        'ktp',
        'kk',
        'formulir',
        'kontrak',
        'status',
    ];

    public function penghuni()
    {
        return $this->hasOne(Penghuni::class);
    }
}
