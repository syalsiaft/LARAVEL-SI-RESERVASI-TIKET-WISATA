<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kota;
use App\Models\transportasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = kota::all();
        $transportasis = transportasi::all();
        $jadwal = jadwal::with('kota')->get();
        return view('jadwal.index', compact('jadwal'), ['jadwal' => $jadwal], ['kota' => $kota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        $transportasis = transportasi::all();
        $data = [
            'transportasi' => $transportasis
        ];
        return view('jadwal.create', compact('data', 'kota', 'transportasis'));
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
            'id' => ' ',
            'kota_asal' => ' ',
            'kota_tujuan' => ' ',
            'id_transportasi' => ' ',
            'jam_berangkat' => ' ',
            'jam_sampai' => ' ',
            'harga' => ' ',
        ]);
        // $jadwal = new kota();
        // $jadwal->kota = $request->input('kota');
        // $jadwal->kota_tujuan = $request->input('kota_tujuan');
        // dd($validation);
        jadwal::create($validation);
        return redirect()->route('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = kota::all();
        $data_jadwal = jadwal::find($id);
        return view('jadwal.edit', ['data_jadwal' => $data_jadwal], compact('kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Jadwal::find($request->id)->update([
            'id' => $request->id,
            'kota_asal' => $request->kota_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'id_transportasi' => $request->id_transportasi,
            'jam_berangkat' => $request->jam_berangkat,
            'jam_sampai' => $request->jam_sampai,
            'harga' => $request->harga,
        ]);
        return redirect()->route('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::find($id)->delete();
        return redirect()->route('jadwal');
    }
    public function exportpdf(){
        $jadwal = jadwal::all();
        $pdf = PDF::loadview('jadwal.export', compact('jadwal'));
        return $pdf->download('export.pdf');
    }
}
