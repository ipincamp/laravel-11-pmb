<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use App\Models\Sekolah;
use App\Models\WaliOrangTua;
use Illuminate\Http\Request;

class RegistrasiUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::all();
        $mahasiswas = CalonMahasiswa::all();
        $orangtuas = WaliOrangTua::all();

        return view('registrasi-ulang.index',  compact('sekolahs', 'mahasiswas', 'orangtuas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
