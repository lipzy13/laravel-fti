<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePimpinanRequest;
use App\Http\Requests\UpdatePimpinanRequest;
use App\Models\Pimpinan;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('senat', [
            'title' => 'SENAT',
            'dekan' => Pimpinan::find(1),
            'wakil_dekan' => Pimpinan::where('id', '>', 1)->get()
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
    public function store(StorePimpinanRequest $request)
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePimpinanRequest $request, Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pimpinan $pimpinan)
    {
        //
    }
}
