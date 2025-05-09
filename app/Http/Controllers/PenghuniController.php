<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use App\Models\Formulir;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    public function index()
    {
        $penghunis = Penghuni::with(['formulir', 'kamar'])->get();
        return view('penghuni.index', compact('penghuni'));
    }

    public function create()
    {
        $formulirs = Formulir::all();
        $kamars = Kamar::where('status', 'Tersedia')->get();
        return view('penghuni.create', compact('formulirs', 'kamars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'formulir_npm' => 'required|exists:formulirs,npm',
            'kamar_id' => 'required|exists:kamars,id'
        ]);
    
        $formulir = Formulir::findOrFail($validated['formulir_npm']);
        $kamar = Kamar::findOrFail($validated['kamar_id']);
    
        // Ambil tahun masuk dari NPM
        $tahunMasuk = '20' . substr($formulir->npm, 0, 2);
    
        // Tambahkan penghuni
        Penghuni::create([
            'formulir_npm' => $formulir->npm,
            'kamar_id' => $kamar->id,
            'tahun_masuk' => $tahunMasuk
        ]);
    
        // Cek jumlah penghuni di kamar dan update status kamar
        $jumlahPenghuni = $kamar->penghuni()->count();  // Pastikan relasi penghuni di model kamar
    
        if ($jumlahPenghuni >= $kamar->kapasitas) {
            // Update status kamar menjadi penuh jika sudah terisi
            $kamar->update(['status' => 'Penuh']);
        } else {
            // Status kamar tetap tersedia jika jumlah penghuni < kapasitas
            $kamar->update(['status' => 'Tersedia']);
        }
    
        return redirect()->route('penghuni.index')->with('success', 'Penghuni berhasil ditambahkan.');
    }
}

