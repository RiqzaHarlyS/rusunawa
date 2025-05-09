<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/formulir', function () {
    return view('formulir');
})->name('formulir');

Route::get('/formulir', [FormulirController::class, 'create'])->name('formulir.create');

Route::post('/formulir', [FormulirController::class, 'store'])->name('formulir.store');

Route::post('/cek-npm', [FormulirController::class, 'cekNPM'])->name('cek-npm');

Route::resource('kamar', KamarController::class)->only(['index']);
Route::resource('penghuni', PenghuniController::class);