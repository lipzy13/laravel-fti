@extends('layouts.main')

@section('container')
<div class="">
    <h1 class="my-3">Profil Senat</h1>
    <h2 class="mt-2 mb-5 text-center">Pimpinan</h2>
    <div class="bg-warning text-center col-lg-4 mx-auto mb-5 py-3 rounded shadow">
        <p class="fs-3">{{ $dekan->jabatan }}</p>
        @if ($dekan->pegawai_id == 0)
            <p class="fs-4"> - <br/><span class="fs-5">( - )</span></p>
        @else
            <p class="fs-4">{{ $dekan->pegawai->nama }}<br/><span class="fs-5">({{ $dekan->pegawai->nip }})</span></p>
        @endif
    </div>
    <div class="row justify-content-center mt-5">
        @foreach ($wakil_dekan as $wakil)
        <div class="bg-warning text-center col-3 mx-auto mb-5 py-3 rounded shadow">
            @if ($wakil->pegawai_id == 0)
            <p class="fs-3">{{ $wakil->jabatan }}
            </p>
            <p class="fs-4"> - <br/><span class="fs-5">( - )</span></p> 
            @else
            <p class="fs-3">{{ $wakil->jabatan }}
            </p>
            <p class="fs-4">{{ $wakil->pegawai->nama }}<br/><span class="fs-5">({{ $wakil->pegawai->nip }})</span></p>  
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection