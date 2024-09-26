<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Cek apakah user yang login adalah admin
        if (session('user') && session('user')->role == 'admin') {
            return view('admin.dashboard');
        }

        // Jika bukan admin, arahkan kembali ke halaman login
        return redirect()->route('login')->withErrors(['error' => 'Akses ditolak.']);
    }

    public function adminDashboard()
{
    $pemeriksaans = Pemeriksaan::all();
    return view('admin.dashboard', compact('pemeriksaans'));
}


}
