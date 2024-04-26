<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonMahasiswaController extends Controller
{
   public function index()
    {
        $data=CalonMahasiswa::all();

        return view("pendaftaran.modal.mahasiswa", compact("data"));
    }
    
    public function simpan(Request $request)
    {
        $data=new DataSekolah();

            $data->email = $request->email;
            $data->nama = $request->nama;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->alamat = $request->alamat;
            $data->rt_rw= $request->rt_rw;
            $data->kelurahan = $request->kelurahan;
            $data->kecamatan = $request->kecamatan;
            $data->kabupaten_kota = $request->kabupaten_kota;
            $data->provinsi = $request->provinsi;
            $data->no_hp = $request->no_hp;

        $data->save();
        
        return back();
    }
}
