<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
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

    public function index()
    {
        return view('ujian-online.index');
    }

    public function soal()
    {
        return view('ujian-online.soal.index');
    }

    public function jawabSoal(Request $request)
    {
        $jawaban = new Ujian();

        $jawaban->responden = auth()->id();
        $jawaban->soal1 = $request->soal1;
        $jawaban->soal2 = $request->soal2;

        $jawaban->save();

        return view('ujian-online.index');
    }
}
