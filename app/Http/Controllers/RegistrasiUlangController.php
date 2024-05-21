<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use App\Models\WaliOrangTua;
use App\Models\Sekolah;

class RegistrasiUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = CalonMahasiswa::first();
        $orangtuas = WaliOrangTua::first();
        $sekolahs = Sekolah::first();

        return view('registrasi-ulang.index', compact(['orangtuas', 'mahasiswas','sekolahs']));
    }
}
