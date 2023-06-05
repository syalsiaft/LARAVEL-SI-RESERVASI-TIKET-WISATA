<?php

namespace App\Http\Controllers;

use App\Models\transportasi;
use Illuminate\Http\Request;

class TransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportasi = transportasi::all();
        return view('transportasi.index', ['transportasi' => $transportasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportasi = transportasi::all();
        return view('transportasi.create', ['data' => $transportasi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'kode' => ' ',
            'nama_transportasi' => ' ',
            'jenis_transportasi' => ' ',
            'kelas' => ' ',
            'jumlah_kursi' => ' ',
        ]);
        // dd($validation);
        transportasi::create($validation);
        return redirect()->route('transportasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transportasi  $transportasi
     * @return \Illuminate\Http\Response
     */
    public function show(transportasi $transportasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transportasi  $transportasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data_transportasi = transportasi::find($id);
        return view('transportasi.edit', ['data_transportasi' => $data_transportasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transportasi  $transportasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Transportasi::find($request->id)->update([
            'kode' => $request->kode,
            'nama_transportasi' => $request->nama_transportasi,
            'jenis_transportasi' => $request->jenis_transportasi,
            'kelas' => $request->kelas,
            'jumlah_kursi' => $request->jumlah_kursi
        ]);
        return redirect()->route('transportasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transportasi  $transportasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transportasi::find($id)->delete();
        return redirect()->route('transportasi');
    }
}
