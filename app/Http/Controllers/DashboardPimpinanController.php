<?php

namespace App\Http\Controllers;

use App\Models\Pimpinan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardPimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.pimpinan.index', [
            'pimpinan' => Pimpinan::all()
        ]);
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
    public function show(Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pimpinan $pimpinan)
    {
        //
        return view('dashboard.pimpinan.edit',[
            'pimpinan' => $pimpinan,
            'pegawai' => Pegawai::where('role_id', '<', 4)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pimpinan $pimpinan)
    {
        $validatedData = $request->validate([
            'pegawai_id' => 'required'
        ]);

        $pimpinan->update($validatedData);
        return redirect('/dashboard/pimpinan')->with('success', 'Data pimpinan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pimpinan $pimpinan)
    {
        //
    }
}
