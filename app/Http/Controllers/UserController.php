<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        // return view('user.daftarPengguna');
        $users = User::all();
        return view('user.daftarPengguna', compact('users'));
        }
        
        public function showUser($username) {
            $user = User::where('username', $username)->firstOrFail();
            return view('user.infoPengguna', compact('user'));
        }
        public function create() {
            return view('user.registrasi');
        }
        public function store(Request $request)
        {
        
        }
        public function show()
        {
        
        }
}
/*
NAMA: MUHAMAD HUDANSAH
NIM: 6706223049
KELAS: 46-03
*/

