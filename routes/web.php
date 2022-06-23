<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftarDiterimaController;
use App\Http\Controllers\AuthController;
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

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('login',[AuthController::class, 'index'])->name('login');
Route::post('login',[AuthController::class, 'proses_login'])->name('login.proses_login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

Route::resource('info', InfoController::class);
Route::resource('pendaftar', PendaftarController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('pendaftar-diterima', PendaftarDiterimaController::class);

