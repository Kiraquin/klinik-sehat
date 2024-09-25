<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        // Cek apakah user yang login adalah petugas
        if (session('user') && session('user')->role == 'petugas') {
            return view('petugas.dashboard');
        }

        // Jika bukan petugas, arahkan kembali ke halaman login
        return redirect()->route('login')->withErrors(['error' => 'Akses ditolak.']);
    }

    public function petugasDashboard()
{
    $pemeriksaans = Pemeriksaan::all();
    return view('petugas.dashboard', compact('pemeriksaans'));
}

}
