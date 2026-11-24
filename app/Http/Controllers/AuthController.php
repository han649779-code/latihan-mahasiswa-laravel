<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // fungsi untuk login
    public function cek(Request $request)
    {
        // cari email di table users
        $data = User::where('email', $request->email)->first();

        // jika ketemu dan password cocok
        if ($data && Hash::check($request->password, $data->password)) {
            // simpan session
            session(['email' => $request->email]);
            session(['logged_in' => true]);

            return redirect('/dashboard');
        }

        // kembali ke login
        return redirect('/')->with('error', 'Email atau password salah');
    }

    // fungsi untuk logout
    public function logout(Request $request)
    {
        // hapus semua session
        $request->session()->flush();

        return redirect('/');
    }
}