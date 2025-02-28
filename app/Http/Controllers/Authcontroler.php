<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Authcontroler extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function aksilogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('daftar-ews')->with('success', 'Login berhasil! Selamat datang kembali, ' . Auth::user()->name);
        }

        return back()->with('error', 'Login gagal! Email atau password salah.');
    }

    public function showRegisterForm() {
        return view('auth.register');
    }

    public function processRegister(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }

    public function logout(){

        return view('/login');
    }
}
