<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function store(Request $request)
{
    $request->validate(['kategori' => 'required']);
    Pemeriksaan::create(['kategori' => $request->kategori]);
    return back()->with('success', 'Kategori berhasil ditambahkan');
}

public function destroy($id)
{
    Pemeriksaan::findOrFail($id)->delete();
    return back()->with('success', 'Kategori berhasil dihapus');
}

}
