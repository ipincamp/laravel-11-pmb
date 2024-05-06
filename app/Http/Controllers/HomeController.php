<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function printPdf()
    {
        $pdf = Pdf::loadView('pengumuman', [
            'diterima' => true,
            'nama' => auth()->user()->name,
            'nim' => 220113006,
            'prodi' => 'Teknologi Informasi',
        ]);
        return $pdf->download('Pengumuman-'. auth()->user()->name .'.pdf');
    }
}
