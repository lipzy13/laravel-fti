@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pimpinan</h1>
    </div>

    <div class="text-center my-3">
        <h1>Pimpinan</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alertdialog">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th><th scope="col">Jabatan</th>
            <th scope="col">Nama</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pimpinan as $pimp)
        @if ($pimp->pegawai_id == 0)
          <tr>
            <th scope="row">{{ $pimp->id }}</th><td>{{ $pimp->jabatan }}</td>
            <td> - </td>
            <td><a href="/dashboard/pimpinan/{{ $pimp->id }}/edit" class="btn btn-outline-success btn-sm">Edit</a></td>
        </tr>    
        @else
          <tr>
            <th scope="row">{{ $pimp->id }}</th><td>{{ $pimp->jabatan }}</td>
            <td>{{ $pimp->pegawai->nama }}</td>
            <td>
              <a href="/dashboard/pimpinan/{{ $pimp->id }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
            </td>
          </tr>
        @endif
        @endforeach
        </tbody>
      </table>
@endsection