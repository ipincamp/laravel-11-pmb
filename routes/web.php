<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bantuan', [App\Http\Controllers\HelpController::class, 'index'])->name('bantuan');

Route::controller(App\Http\Controllers\FormulirController::class)->group(function () {
    Route::get('/formulir', 'index');
    Route::post('/formulir/sekolah', 'addSekolah');
    Route::post('/formulir/mahasiswa', 'addMahasiswa');
    Route::post('/formulir/orangtuawali', 'addOrangTuaWali');
});

// Route::get('/formulir', [App\Http\Controllers\FormulirController::class, 'index']);
// Route::get('/data-sekolah', [App\Http\Controllers\DataSekolahController::class, 'index'])->name('dataSekolah');
// Route::get('/data-calon-mahasiswa', [App\Http\Controllers\DataCalonMahasiswaController::class, 'index'])->name('dataCalonMahasiswa');
// Route::get('/wali-orang-tua', [App\Http\Controllers\DataCalonMahasiswaController::class, 'index']);


Route::controller(App\Http\Controllers\RapotController::class)->group(function () {
    Route::get('/unggah', 'index');
    // Route::post('/formulir/sekolah', 'addSekolah');
    // Route::post('/formulir/mahasiswa', 'addMahasiswa');
    // Route::post('/formulir/orangtuawali', 'addOrangTuaWali');
});

Route::controller(App\Http\Controllers\DokumenController::class)->group(function () {
    Route::get('/dokumen', 'index');
});

Route::controller(App\Http\Controllers\UjianController::class)->group(function () {
    Route::get('/ujian', 'index');
});

Route::controller(App\Http\Controllers\PernyataanController::class)->group(function () {
    Route::get('/pernyataan', 'index');
});
