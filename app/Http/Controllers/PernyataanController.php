<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PernyataanController extends Controller
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
        return view('pernyataan.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'halaman1' => 'mimes:png,jpg,jpeg|max:2048',
            'halaman2' => 'mimes:png,jpg,jpeg|max:2048',
            'halaman3' => 'mimes:png,jpg,jpeg|max:2048',
            'halaman4' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $halamans = ['halaman1', 'halaman2', 'halaman3', 'halaman4'];
        $path = '';

        foreach ($halamans as $halaman) {
            if ($request->hasFile($halaman)) {
                $filename = auth()->user()->id . '-' . $halaman . '.jpg';
                $path = Storage::putFileAs('pernyataan', $request->file($halaman), $filename);

                break;
            }
        }

        return back()->with('success', 'File has been successfully uploaded. path' . $path);
    }
}
