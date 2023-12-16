<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/challenge'); // Ganti dengan halaman tujuan setelah login berhasil
        } else {
            // Jika autentikasi gagal
            return redirect()->back()->withErrors(['username' => 'Username atau kata sandi salah']);
        }
    }
}

