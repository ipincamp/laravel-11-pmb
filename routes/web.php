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
Route::get('/raports', [App\Http\Controllers\RaportController::class, 'index']);
Route::post('raports', [App\Http\Controllers\RaportController::class, 'store'])->name('raports.store');

// ujian online
Route::controller(App\Http\Controllers\UjianController::class)->group(function () {
    Route::get('/ujian', 'index');
    Route::get('/ujian/soal', 'soal')->name('ujian.soal');
    Route::post('/ujian/soal', 'jawabSoal')->name('ujian.jawab');
});

// dokumen: ktp, kk, akte
Route::controller(App\Http\Controllers\DokumenController::class)->group(function () {
    Route::get('/dokumen', 'index');
});

// pernyataan
Route::get('/pernyataans', [App\Http\Controllers\PernyataanController::class, 'index']);
Route::post('/pernyataans', [App\Http\Controllers\PernyataanController::class, 'store'])->name('pernyataans.store');
