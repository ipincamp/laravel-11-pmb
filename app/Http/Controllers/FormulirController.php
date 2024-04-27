<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use App\Models\Sekolah;
use App\Models\WaliOrangTua;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::all();
        $mahasiswas = CalonMahasiswa::all();
        $orangtuas = WaliOrangTua::all();

        return view('pendaftaran.index', compact('sekolahs', 'mahasiswas', 'orangtuas'));
    }

    /**
     * Store a newly created resource in storage.
     * Sekolah
     */
    public function addSekolah(Request $request)
    {
        $sekolah = new Sekolah();

        $sekolah->nisn = $request->nisn;
        $sekolah->derajat = $request->derajat;
        $sekolah->nama = $request->nama;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->alamat = $request->alamat;
        $sekolah->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     * Calon Mahasiswa
     */
    public function addMahasiswa(Request $request)
    {
        // dd($request->all());
        $mahasiswa = new CalonMahasiswa();

        $mahasiswa->email = $request->email;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->agama = $request->agama;
        $mahasiswa->rt_rw = $request->rt_rw;
        $mahasiswa->kelurahan = $request->kelurahan;
        $mahasiswa->kecamatan = $request->kecamatan;
        $mahasiswa->kabupaten_kota = $request->kabupaten_kota;
        $mahasiswa->provinsi = $request->provinsi;
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->save();

        return redirect()->back();
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
