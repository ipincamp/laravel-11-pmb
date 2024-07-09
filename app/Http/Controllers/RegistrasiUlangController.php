<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\DataOrtuWali;
use App\Models\DataSekolah;

class RegistrasiUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = DataMahasiswa::first();
        $orangtuas = DataOrtuWali::first();
        $sekolahs = DataSekolah::first();

        return view('registrasi-ulang.index', compact(['orangtuas', 'mahasiswas','sekolahs']));
    }
}
