<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulir', function (Blueprint $table) {
            $table->string('npm')->primary(); // menjadikan npm sebagai primary key
            $table->string('nama_lengkap');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->text('alamat');
            $table->string('desa');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('nomor_whatsapp');
            $table->string('email');
            $table->string('ktp');
            $table->string('kk');
            $table->string('formulir');
            $table->string('kontrak');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
