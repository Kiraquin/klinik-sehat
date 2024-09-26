<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeriksaan;

class PetPemeriksaanController extends Controller
{
    // Menampilkan form dan daftar pemeriksaan
    public function index()
    {
        $pemeriksaans = Pemeriksaan::all();
        return view('petugas.pemeriksaans.index', compact('pemeriksaans'));
    }

    // Menambahkan jenis pemeriksaan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Pemeriksaan::create(['nama' => $request->nama]);

        return redirect()->back()->with('success', 'Jenis pemeriksaan berhasil ditambahkan!');
    }

    // Mengedit jenis pemeriksaan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->update(['nama' => $request->nama]);

        return redirect()->back()->with('success', 'Jenis pemeriksaan berhasil diperbarui!');
    }

    // Menghapus jenis pemeriksaan
    public function destroy($id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->delete();

        return redirect()->back()->with('success', 'Jenis pemeriksaan berhasil dihapus!');
    }
}
