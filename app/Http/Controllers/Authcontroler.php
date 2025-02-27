<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroler extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Authcontroler::attempt($credentials)) {
    //         return redirect()->route('home')->with('success', 'Login berhasil! Selamat datang kembali, ' . Authcontroler::user()->name);
    //     }

    //     return back()->with('error', 'Login gagal! Email atau password salah.');
    // }

    public function registrasi(Request $request)
    {
        return view('login.registrasi');       
    }

    public function logout(){

        return view('/login');
    }
}
