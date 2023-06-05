<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\penumpang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penumpang = penumpang::all();
        $pemesanan = pemesanan::all();
        return view('penumpang.index', compact('pemesanan', 'penumpang'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemesanans = pemesanan::all();
        $penumpangs = penumpang::all();
        $data = ['penumpang' => $penumpangs];
        return view('penumpang.create', ['pemesanan' => $pemesanans]);
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
            'id_pemesanan' => ' ',
            'nama_penumpang' => ' ',
            'no_seat' => ' ',
        ]);
        // dd($validation);
        penumpang::create($validation);
        return redirect()->route('penumpang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function show(penumpang $penumpang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_penumpang = penumpang::find($id);
        return view('penumpang.edit', ['data_penumpang' => $data_penumpang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        penumpang::find($request->id)->update([
            'id_pemesanan' => $request->id_pemesanan,
            'nama_penumpang' => $request->nama_penumpang,
            'no_seat' => $request->no_seat
        ]);
        return redirect()->route('penumpang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penumpang::find($id)->delete();
        return redirect()->route('penumpang');
    }
    public function exportpdf(){
        $penumpang = penumpang::all();
        $pdf = PDF::loadview('penumpang.export', ['penumpang'=>$penumpang]);
        return $pdf->download('export.pdf');
    }
}
