<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
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
        // $rapots1 = UnggahBerkas::all();

        // return view('unggahBerkas.index', compact('rapots1', ));
        return view('dokumen.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kk' => 'mimes:png,jpg,jpeg|max:2048',
            'ktp' => 'mimes:png,jpg,jpeg|max:2048',
            'akte' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $dokuments = ['kk', 'ktp', 'akte'];
        $path = '';

        foreach ($dokuments as $dokument) {
            if ($request->hasFile($dokument)) {
                $filename = auth()->user()->id . '-' . $dokument . '.jpg';
                $path = Storage::putFileAs('dokumen', $request->file($dokument), $filename);

                break;
            }
        }

        return back()->with('success', 'File has been successfully uploaded. path' . $path);
    }
}
