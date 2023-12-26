@extends('dashboard.layouts.main')

@section('container')
    <div class="my-3">
        <a href="/dashboard/pimpinan" class="fw-semibold text-decoration-none text-black">
          <span data-feather="arrow-left"></span>
          Kembali
        </a>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Pimpinan</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="/dashboard/pimpinan/{{ $pimpinan->id }}">
        @method('put')
        @csrf
        <fieldset disabled>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Jabatan</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $pimpinan->jabatan }}">
            </div>
        </fieldset>
        <div class="mb-3">
            <label for="pegawai_id" class="form-label">Nama</label>
            <select class="form-select" id="pegawai_id" name="pegawai_id">
              @foreach ($pegawai as $pega)
              @if (old('pegawai_id', $pimpinan->pegawai_id) == $pega->id)
              <option value="{{ $pega->id }}" selected>{{ $pega->nama }}</option>
              @else
              <option value="{{ $pega->id }}">{{ $pega->nama }}</option>
              @endif
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
       </form>
    </div>
        
@endsection