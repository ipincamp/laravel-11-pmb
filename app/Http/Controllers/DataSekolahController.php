<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSekolah;

class DataSekolahController extends Controller
{
    public function index()
    {
        $data=DataSekolah::all();

        return view("pendaftaran.dataSekolah", compact("data"));
    }
    
    public function simpan(Request $request)
    {
        $data=new DataSekolah();

            $data->nisn = $request->nisn;
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->derajat = $request->derajat;

        $data->save();
        
        return back();
    }
}
