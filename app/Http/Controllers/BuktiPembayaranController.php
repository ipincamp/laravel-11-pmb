<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuktiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sampleData = [
            [
                'nama' => 'Budi',
                'bank' => 'BNI',
                'nominal' => 100000,
                'bukti' => 'bukti-tf-1.jpg',
            ],
            [
                'nama' => 'Ani',
                'bank' => 'BRI',
                'nominal' => 200000,
                'bukti' => 'bukti-tf-2.jpg',
            ],
            [
                'nama' => 'Cici',
                'bank' => 'BCA',
                'nominal' => 300000,
                'bukti' => 'bukti-tf-3.jpg',
            ],
        ];

        return view('unggah-bukti-tf.index', compact('sampleData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
