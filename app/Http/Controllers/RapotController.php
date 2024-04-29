<?php

namespace App\Http\Controllers;

use App\Models\UnggahBerkas;
use Illuminate\Http\Request;

class RapotController extends Controller
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
        return view('unggahBerkas.index');

        
    }
    public function addRapot(Request $request)
    {
        $sekolah = new UnggahBerkas();

        $sekolah->semeter_1 = $request->semester_1;
        $sekolah->save();

        return redirect()->back();
    }

}
