<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaliOrangTuaController extends Controller
{
    public function index()
    {
        $data=CalonMahasiswa::all();

        return view("pendaftaran.modal.wali-orangtua", compact("data"));
    }
    
    public function simpan(Request $request)
    {
        $data=new DataSekolah();

            $data->nama_ayah = $request->nama_ayah;
            $data->nama_ibu = $request->nama_ibu;
            $data->no_hp = $request->no_hp;

        $data->save();
        
        return back();
    }
}
