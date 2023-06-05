<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = role::all();
        return view('Role.index', ['role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            'nama_rule' => 'required'
        ]);
        role::create($validation);
        return redirect()->route('Role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_role = role::find($id);
        return view('Role.edit', ['data_role' => $data_role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Role::find($request->id)->update([
            'nama_rule' => $request->nama_rule,
        ]);
        // $role->update($request->validate());
        return redirect()->route('Role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        role::find($id)->delete();
        return redirect()->route('role');
    }
    public function exportpdf(){
        $role = role::all();
        $pdf = PDF::loadview('Role.export', compact('role'));
        return $pdf->download('export.pdf');
    }
}
