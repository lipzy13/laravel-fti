@extends('dashboard.layouts.main')

@section('container')
    <div class="my-3">
        <a href="/dashboard/pegawai" class="fw-semibold text-decoration-none text-black">
          <span data-feather="arrow-left"></span>
          Kembali
        </a>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Pegawai</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="/dashboard/pegawai/{{ $pegawai->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" value="{{ old('nama', $pegawai->nama) }}" required
          name="nama">
          @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nip" class="form-label @error('nip')is-invalid @enderror">NIP</label>
          <input type="number" class="form-control" id="nip" value="{{ old('nip', $pegawai->nip) }}" required name="nip">
          @error('nip')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="role_id" class="form-label">Jabatan</label>
          <select class="form-select" id="role_id" name="role_id">
            @foreach ($roles as $role)
            @if (old('role_id', $pegawai->role_id) == $role->id)
              <option value="{{ $role->id }}" selected>{{ $role->nama }}</option>
            @else
              <option value="{{ $role->id }}">{{ $role->nama }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="status_id" class="form-label">Jabatan</label>
          <select class="form-select" id="status_id" name="status_id">
            @foreach ($statuses as $status)
            @if (old('status_id', $pegawai->status_id) == $status->id)
            <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
          @else
            <option value="{{ $status->id }}">{{ $status->status }}</option>
          @endif
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
      </form>
    </div>
        
@endsection