<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EwsRanap;

class EwsRanapController extends Controller
{
    public function daftarews()
    {
        return view('Home');
    }

    public function Laporan()
    {
        return view('Laporan');
    }
}
