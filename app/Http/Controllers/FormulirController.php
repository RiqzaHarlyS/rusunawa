<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    // Tampilkan halaman form pendaftaran ke user
    public function create()
    {
        return view('formulir');
    }

    // Proses data formulir yang dikirim user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap'    => 'required|string',
            'npm'             => 'required|string|unique:formulir,npm',
            'jurusan'         => 'required|string',
            'fakultas'        => 'required|string',
            'alamat'          => 'required|string',
            'desa'            => 'required|string',
            'kota'            => 'required|string',
            'provinsi'        => 'required|string',
            'nomor_whatsapp'  => 'required|string',
            'email'           => 'required|email',
            'ktp'             => 'required|file',
            'kk'              => 'required|file',
            'formulir'        => 'required|file',
            'kontrak'         => 'required|file',
        ]);

        // Upload files
        $ktpPath      = $request->file('ktp')->store('ktp', 'public');
        $kkPath       = $request->file('kk')->store('kk', 'public');
        $formulirPath = $request->file('formulir')->store('formulir', 'public');
        $kontrakPath  = $request->file('kontrak')->store('kontrak', 'public');

        // Simpan data ke database
        Formulir::create([
            ...$validated,
            'ktp'      => $ktpPath,
            'kk'       => $kkPath,
            'formulir' => $formulirPath,
            'kontrak'  => $kontrakPath,
        ]);

        return redirect()->route('formulir.create')->with('success', 'Pendaftaran berhasil!');
    }

    // Cek NPM apakah sudah terdaftar
    public function cekNPM(Request $request)
    {
        $npm    = $request->npm;
        $exists = Formulir::where('npm', $npm)->exists();

        return response()->json(['exists' => $exists]);
    }
}
