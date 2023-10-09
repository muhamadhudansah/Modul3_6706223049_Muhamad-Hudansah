<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
{
    // Validasi data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    // Buat dan simpan pengguna
    User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);


    // Redirect atau kirim respons ke halaman yang sesuai
    return redirect('/dashboard')->with('success', 'Pendaftaran berhasil!');
}
}
