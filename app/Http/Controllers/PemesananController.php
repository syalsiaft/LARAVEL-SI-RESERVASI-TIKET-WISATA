<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\pemesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = pemesanan::all();
        return view('pemesanan.index', ['pemesanan' => $pemesanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $jadwal = jadwal::all();
        $user = User::all();
        $pemesanan = pemesanan::all();
        $array = [
            'jadwal' => $jadwal,
            'user' => $user,
            'pemesanan' => $pemesanan,
        ];
        return view('pemesanan.create', $array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //    dd($request);
        $validation = $request->validate([
            // 'id' => $request->id,
            'id_jadwal' => ' ',
            'id_user' => ' ',
            'nama_pembeli' => ' ',
            'alamat_pembeli' => ' ',
            'email_pembeli' => ' ',
            'no_telp_pembeli' => ' ',
            'jumlah_tiket' => ' ',
            'total_harga' => ' ',
        ]);

        pemesanan::create($validation);
        return redirect()->route('pemesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_pemesanan = pemesanan::find($id);
        return view('pemesanan.edit', ['data_pemesanan' => $data_pemesanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        pemesanan::find($request->id)->update([
            'id_jadwal' => $request->id_jadwal,
            'id_user' => $request->id_user,
            'nama__pembeli' => $request->nama__pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'email_pembeli' => $request->email_pembeli,
            'no_telp_pembeli' => $request->no_telp_pembeli,
            'jumlah_tiket' => $request->jumlah_tiket,
            'total_harga' => $request->total_harga
        ]);
        return redirect()->route('pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pemesanan::find($id)->delete();
        return redirect()->route('pemesanan');
    }
    public function exportpdf(){
        $pemesanan = pemesanan::all();
        $pdf = PDF::loadview('pemesanan.export', compact('pemesanan'));
        return $pdf->download('export.pdf');
    }

}
