<?php

use App\Http\Controllers\Authcontroler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EwsRanapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get( '/login',  [Authcontroler::class,'index'])->name('login');
Route:: post( 'login',  [Authcontroler::class,'aksilogin'])->name('login');
Route:: get( 'logut',  [Authcontroler::class,'logout'])->name('logout');

Route::get('/register', [Authcontroler::class,'showRegisterForm'])->name('register');
Route::post('register', [Authcontroler::class,'processRegister'])->name('register.process');

Route:: get( '/from.laporan',  [EwsRanapController::class,'fromLaporan'])->name('from.Laporan');


Route::middleware(['auth'])->group(function () {
    Route::get( 'homedasbord',  [EwsRanapController::class,'index'])->name('homedasbord');
});
