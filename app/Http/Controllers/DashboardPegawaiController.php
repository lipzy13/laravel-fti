<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pimpinan;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Http\Request;

class DashboardPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.pegawai.index', [
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.pegawai.create',[
            'roles' => Role::all(),
            'statuses' => Status::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'role_id' => 'required',
            'status_id' => 'required'
        ]);
        

        Pegawai::create($validatedData);
        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
        return view('dashboard.pegawai.show',[
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
        return view('dashboard.pegawai.edit',[
            'pegawai' => $pegawai,
            'roles' => Role::all(),
            'statuses' => Status::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'role_id' => 'required',
            'status_id' => 'required'
        ]);

        $pegawai->update($validatedData);
        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        //
        Pimpinan::where('pegawai_id', $pegawai->id)->update(['pegawai_id' => 0]);
        Pegawai::destroy($pegawai->id);
        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil dihapus'); 
    }
}
