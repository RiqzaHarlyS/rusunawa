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
        $penghuni = Penghuni::with(['formulir', 'kamar'])->get();
        return view('penghuni.index', compact('penghuni'));
    }

    public function create()
    {
        $formulir = Formulir::all();
        $kamar = Kamar::where('status', 'Tersedia')->get();
        return view('penghuni.create', compact('formulirs', 'kamars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'formulir_npm' => 'required|exists:formulir,npm',
            'kamar_id' => 'required|exists:kamar,id'
        ]);

        // Cek apakah sudah jadi penghuni
        if (Penghuni::where('formulir_npm', $validated['formulir_npm'])->exists()) {
            return redirect()->back()->with('error', 'Pendaftar ini sudah menjadi penghuni.');
        }

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

        // Hapus dari tabel formulir
        $formulir->delete();

        // Hitung ulang jumlah penghuni
        $jumlahPenghuni = $kamar->penghuni()->count();

        // Update status kamar
        if ($jumlahPenghuni >= $kamar->kapasitas) {
            $kamar->update(['status' => 'Penuh']);
        } else {
            $kamar->update(['status' => 'Tersedia']);
        }

        return redirect()->route('penghuni.index')->with('success', 'Penghuni berhasil ditambahkan.');
    }
}

