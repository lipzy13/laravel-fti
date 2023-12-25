<?php

use App\Http\Controllers\DashboardPegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Fakultas Teknologi Informasi"
    ]);
});

Route::get('/profil', [PegawaiController::class, 'index']);

Route::get('/akademik', function () {
    return view('akademik', [
        "title" => "AKADEMIK"
    ]);
});

Route::get('/informasi', function () {
    return view('informasi',[
        "title" => "INFORMASI"
    ]);
});

Route::get('/web-corner', function () {
    return view('web-corner',[
        "title" => "WEB CORNER"
    ]);
});

Route::get('/ppid', function () {
    return view('ppid', [
        "title" => "PPID"
    ]);
});

Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "LAYANAN"
    ]);
});

Route::get('/download', function () {
    return view('download',[
        "title" => "DOWNLOAD"
    ]);
});

Route::get('/data', function () {
    return view('data', [
        "title" => "DATA"
    ]);
});

Route::get('/penjaminan-mutu', function () {
    return view('penjaminan-mutu',[
        "title" => "PENJAMINAN MUTU"
    ]);
});

Route::get('/senat', function () {
    return view('senat', [
        "title" => "SENAT"
    ]);
});

Route::get('/zona-integritas', function () {
    return view('zona-integritas', [
        "title" => "ZONA INTEGRITAS"
    ]);
});

Route::get('/alumni', function () {
    return view('alumni', [
        "title"=> "ALUMNI"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/pegawai', function () {
    return view('dashboard.pegawai.index');
})->middleware('auth');

Route::resource('/dashboard/pegawai', DashboardPegawaiController::class)->middleware('auth');