<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = tiket::all();
        return view('tiket.index', ['tiket' => $tiket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemesanans = pemesanan::all();
        $data = [
            'pemesanan' => $pemesanans
        ];
        return view('tiket.create');
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
            'nama_pembeli' => ' ',
            'kota_asal' => ' ',
            'kota_tujuan' => ' ',
            'waktu_transaksi' => ' ',
            'status' => ' ',
        ]);
        // dd($validation);
        Tiket::create($validation);
        return redirect()->route('tiket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_tiket = tiket::find($id);
        return view('Tiket.edit', ['data_tiket' => $data_tiket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Tiket::find($request->id)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'kota_asal' => $request->kota_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'waktu_transaksi' => $request->waktu_transaksi,
            'status' =>  $request->status,
        ]);
        return redirect()->route('Tiket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tiket::find($id)->delete();
        return redirect()->route('tiket');
    }

    public function exportpdf(){
        $tiket = tiket::all();
        $pdf = PDF::loadview('tiket.export', compact('tiket'));
        return $pdf->download('export.pdf');
    }

}
