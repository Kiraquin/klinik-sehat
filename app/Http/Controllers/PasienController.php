<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        // Mengambil semua data pasien dari database
    $pasiens = Pasien::all();
    
    // Mengirim data pasien ke view
    return view('admin.pasien', compact('pasiens'));
    }

    public function store(Request $request)
{

    // Validasi data
    $validated = $request->validate([
        'nama_pasien' => 'required|string|max:255',
        'keluhan' => 'required|string',
        'diagnosa' => 'required|string',
        'hasil_periksa' => 'required|string',
        'jenis_pasien' => 'required|in:BPJS,Umum',
        'total_pembayaran' => 'required|numeric',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096' // Validasi gambar
    ]);

    // Handle file upload
    if ($request->hasFile('foto')) {
        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('pasien/foto'), $fileName);
        $validated['foto'] = $fileName;
    }

    // Simpan data ke database
    $pasien = new Pasien($validated);
    $pasien->total_pembayaran = $pasien->hitungDiskon();
    $pasien->save();

    return redirect()->back()->with('success', 'Data pasien berhasil disimpan!');
}


}
