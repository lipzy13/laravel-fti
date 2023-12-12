@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="my-3">Profil</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" 
            aria-expanded="true" aria-controls="collapseOne">
              Profil PPID
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <img src="img/ppid/profil.png" width="1200px" class="mx-auto d-flex"/>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" 
            aria-expanded="false" aria-controls="collapseTwo">
              Visi Misi
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <img src="img/profil/visi.jpg" width="600px" class="mx-auto d-flex"/>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" 
            aria-expanded="false" aria-controls="collapseThree">
              Struktur Organisasi
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <img src="img/profil/struktuur.jpeg" width="800px" class="mx-auto d-flex"/>
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" 
              aria-expanded="false" aria-controls="collapseFour">
                Tugas dan Fungsi PPID
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <img src="img/ppid/tugas.png" width="1000px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection