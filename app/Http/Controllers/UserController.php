<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'username' => 'required|unique:users',
        'password' => 'required',
        'role' => 'required'
    ]);

    User::create([
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'role' => $request->role
    ]);

    return back()->with('success', 'User berhasil ditambahkan');
}

public function destroy($id)
{
    User::findOrFail($id)->delete();
    return back()->with('success', 'User berhasil dihapus');
}

}
