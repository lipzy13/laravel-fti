@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="my-3">Selayang Pandang</h1>
      <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" 
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Visi dan Misi
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <img src="img/profil/visi.jpg" width="600px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Tujuan
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <img src="img/profil/tujuan.jpg" width="600px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Struktur Organisasi
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <img src="img/profil/struktuur.jpeg" width="600px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
        </div>

      <h1 class="my-3">SDM</h1>
      <div class="accordion" id="accordionExample1">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" 
              aria-expanded="true" aria-controls="collapseOne1">
                Dosen
              </button>
            </h2>
            <div id="collapseOne1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th><th scope="col">Nama</th>
                      <th scope="col">NIP</th><th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pegawai_dosen as $pega)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th><td>{{ $pega->nama }}</td>
                      @if ($pega->nip == 0)
                      <td>-</td>    
                      @else
                      <td>{{ $pega->nip }}</td>    
                      @endif
                      <td>{{ $pega->status->status }} - {{ $pega->role->nama }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
              data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                Tenaga Kependidikan
              </button>
            </h2>
            <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th><th scope="col">Nama</th>
                      <th scope="col">NIP</th><th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($pegawai_non_dosen as $pega)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th><td>{{ $pega->nama }}</td>
                    @if ($pega->nip == 0)
                    <td> - </td>    
                    @else
                    <td>{{ $pega->nip }}</td>
                    @endif
                    <td>{{ $pega->status->status }} - {{ $pega->role->nama }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
  </div>
@endsection