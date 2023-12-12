@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="my-3">Penjaminan Mutu</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" 
            aria-expanded="true" aria-controls="collapseOne">
              Visi dan Misi
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <img src="img/penjaminan-mutu/gpm.png" width="1200px" class="mx-auto d-flex"/>
              <img src="img/penjaminan-mutu/gkm.png" width="1200px" class="mx-auto d-flex"/>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" 
            aria-expanded="false" aria-controls="collapseTwo">
              Struktur Organisasi
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <img src="img/penjaminan-mutu/struktur-gpm.jpeg" width="600px" class="mx-auto d-flex"/>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" 
            aria-expanded="false" aria-controls="collapseThree">
              Laporan Monitoring dan Evaluasi
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <img src="img/penjaminan-mutu/laporan.png" width="600px" class="mx-auto d-flex"/>
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" 
              aria-expanded="false" aria-controls="collapseFour">
                Akreditasi Departemen
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <img src="img/penjaminan-mutu/akreditasi.png" width="600px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" 
              aria-expanded="false" aria-controls="collapseFive">
                Hasil AMI
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <img src="img/penjaminan-mutu/ami.png" width="800px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" 
              aria-expanded="false" aria-controls="collapseSix">
                Dokumen SOP
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Uraian</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="https://drive.google.com/file/d/17VO3Wk2gp_u83A_e305sKTRFNjcpLmJ9/view?usp=sharing">	
                          SOP Pelaksanaan Ujian FTI</a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td><a href="https://drive.google.com/file/d/1g4CWXRNBp-q0yWPdyF59U5LplvqNDV5g/view?usp=sharing">
                          SOP Pengukuran Capaian Pembelajaran</a></td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
      </div>
</div>
@endsection