<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bantuan', [App\Http\Controllers\HelpController::class, 'index'])->name('bantuan');

// formulir pendaftaran
Route::controller(App\Http\Controllers\FormulirController::class)->group(function () {
    Route::get('/formulir', 'index');
    Route::post('/formulir/sekolah', 'addSekolah');
    Route::post('/formulir/mahasiswa', 'addMahasiswa');
    Route::post('/formulir/orangtuawali', 'addOrangTuaWali');
});

// unggah raport
Route::controller(App\Http\Controllers\RaportController::class)->group(function () {
    Route::get('/raport', 'index');
    // Route::post('/formulir/sekolah', 'addSekolah');
    // Route::post('/formulir/mahasiswa', 'addMahasiswa');
    // Route::post('/formulir/orangtuawali', 'addOrangTuaWali');
});

// ujian online
Route::controller(App\Http\Controllers\UjianController::class)->group(function () {
    Route::get('/ujian', 'index');
});

// dokumen: ktp, kk, akte
Route::controller(App\Http\Controllers\DokumenController::class)->group(function () {
    Route::get('/dokumen', 'index');
});

// pernyataan
Route::controller(App\Http\Controllers\PernyataanController::class)->group(function () {
    Route::get('/pernyataan', 'index');
});
