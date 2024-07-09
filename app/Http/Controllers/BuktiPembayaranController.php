<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\UploadBukti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BuktiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buktis = UploadBukti::with('mahasiswa')->get();

        return view('unggah-bukti-tf.index', compact('buktis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'metode' => 'required|string',
            'tujuan' => 'required|string',
            'jumlah' => 'required|integer',
            'tanggal_bayar' => 'required',
            'file' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $filename = auth()->user()->id . '-bukti-' . time() . '.jpg';
        $path = Storage::putFileAs('dokumen', $request->file('file'), $filename);

        $bukti = new UploadBukti();
        $bukti->metode = $request->metode;
        $bukti->tujuan = $request->tujuan;
        $bukti->jumlah = $request->jumlah;
        $bukti->tanggal_bayar = $request->tanggal_bayar;
        $bukti->bukti = $filename;
        $bukti->mahasiswa_id = DataMahasiswa::where('user_id', auth()->user()->id)->first()->id;
        $bukti->save();

        return redirect()->route('bukti-pembayaran.index')->with('success', 'Bukti pembayaran berhasil diunggah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
