<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\DataOrtuWali;
use App\Models\DataSekolah;
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
        $sekolah = DataSekolah::with('mahasiswa')->first();
        $mahasiswa = DataMahasiswa::with('user')->first();
        $orangtua = DataOrtuWali::with('mahasiswa')->first();

        return view('pendaftaran.index', compact('sekolah', 'mahasiswa', 'orangtua'));
    }

    /**
     * Store a newly created resource in storage.
     * Sekolah
     */
    public function addSekolah(Request $request)
    {
        $request->validate([
            'nisn' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'derajat' => 'required|string',
            'jurusan' => 'required|string',
        ]);

        $mahasiswa = DataMahasiswa::where('user_id', auth()->user()->id);
        $sekolah = new DataSekolah();

        $sekolah->nisn = $request->nisn;
        $sekolah->nama = $request->nama;
        $sekolah->alamat = $request->alamat;
        $sekolah->derajat = $request->derajat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->mahasiswa_id = $mahasiswa->first()->id;
        $sekolah->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     * Calon Mahasiswa
     */
    public function addMahasiswa(Request $request)
    {
        $request->validate([
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'no_hp' => 'required|string',
        ]);

        $mahasiswa = new DataMahasiswa();

        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->agama = $request->agama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->rt = $request->rt;
        $mahasiswa->rw = $request->rw;
        $mahasiswa->kelurahan = $request->kelurahan;
        $mahasiswa->kecamatan = $request->kecamatan;
        $mahasiswa->kabupaten = $request->kabupaten;
        $mahasiswa->provinsi = $request->provinsi;
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->user_id = auth()->user()->id;
        $mahasiswa->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     * Orang Tua / Wali
     */
    public function addOrangTuaWali(Request $request)
    {
        // TODO: Add validation

        $orangtua = new DataOrtuWali();

        $orangtua->untuk = $request->hubungan;
        $orangtua->nama_ayah = $request->nama_ayah;
        $orangtua->nama_ibu = $request->nama_ibu;
        $orangtua->no_hp = $request->no_hp;
        $orangtua->save();

        return redirect()->back();
    }
}
