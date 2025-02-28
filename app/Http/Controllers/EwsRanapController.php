<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EwsRanap;

class EwsRanapController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function fromLaporan()
    {
        return view('Laporan');
    }
}
