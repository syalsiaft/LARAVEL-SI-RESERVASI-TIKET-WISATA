<?php

namespace App\Http\Controllers;

use App\Models\kota;
use App\Models\pegawai;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        return view('admin.User.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('admin.User.create', ['role' => $role]);
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
            'nama' => ' ',
            'email' => ' ',
            'password' => ' ',
            'no_telp' => ' ',
            'role' => ' ',
        ]);
        // dd($validation);
        user::create($validation);
        return redirect()->route('pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $us = user::find($id);
        return view('admin.user.edit', ['us' => $us]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        user::find($request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'no_telp' => $request->no_telp,
            'role' => $request->role,
        ]);
        // $role->update($request->validate());
        return redirect()->route('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::find($id)->delete();
        return redirect()->route('User');
    }
}
