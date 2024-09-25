<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Menampilkan form login
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input dari form login
        $credentials = $request->only('username', 'password');

        // Mencari user berdasarkan username
        $user = User::where('username', $credentials['username'])->first();

        // Jika user ditemukan dan password cocok
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Menyimpan data user ke session
            session(['user' => $user]);

            // Mengarahkan ke dashboard sesuai dengan role
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'petugas') {
                return redirect()->route('petugas.dashboard');
            }
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['error' => 'Login gagal! Username atau password salah.']);
    }

    public function logout()
    {
        // Menghapus session user
        session()->forget('user');
        return redirect()->route('login');
    }
}
