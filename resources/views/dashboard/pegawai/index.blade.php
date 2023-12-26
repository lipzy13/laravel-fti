@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pegawai</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alertdialog">
            {{ session('success') }}
        </div>
    @endif
        <a href="/dashboard/pegawai/create" class="btn btn-success mb-3">Tambah data pegawai</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th><th scope="col">Nama</th>
                <th scope="col">NIP</th><th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($pegawai as $pega)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th><td>{{ $pega->nama }}</td>
              <td>{{ $pega->nip }}</td>
              <td>{{ $pega->status->status }} - {{ $pega->role->nama }}</td>
              <td>
                <a href="/dashboard/pegawai/{{ $pega->id }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                <form action="/dashboard/pegawai/{{ $pega->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
@endsection