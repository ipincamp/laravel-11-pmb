<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RaportController extends Controller
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
        // $rapots1 = UnggahBerkas::all();

        // return view('unggahBerkas.index', compact('rapots1', ));
        return view('unggah-raport.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'semester1' => 'mimes:png,jpg,jpeg|max:2048',
            'semester2' => 'mimes:png,jpg,jpeg|max:2048',
            'semester3' => 'mimes:png,jpg,jpeg|max:2048',
            'semester4' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $semesters = ['semester1', 'semester2', 'semester3', 'semester4'];
        $path = '';

        foreach ($semesters as $semester) {
            if ($request->hasFile($semester)) {
                $filename = auth()->user()->id . '-' . $semester . '.jpg';
                $path = Storage::putFileAs('raport', $request->file($semester), $filename);

                break;
            }
        }

        return back()->with('success', 'File has been successfully uploaded. path' . $path);
    }
}
