<?php

namespace App\Http\Controllers;

use App\Models\kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = kota::all();
        return view('kota.index', ['kota' => $kota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $kota = new kota([
            'kota' => $request->kota,
        ]);
        $kota->save();
        return redirect()->route('kota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show(kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data_kota = kota::find($id);
        return view('kota.edit', ['data_kota' => $data_kota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        kota::find($request->id)->update([
            'kota' => $request->kota,
        ]);
        return redirect()->route('kota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        kota::find($id)->delete();
        return redirect()->route('kota');
    }
}
