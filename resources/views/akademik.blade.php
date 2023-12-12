@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="my-3">Kurikulum</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" 
            aria-expanded="true" aria-controls="collapseOne">
              Kalender Akademik
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <embed src= 
                "img/akademik/kalender.pdf"
                               width="800"
                               height="500"
                               class="d-flex mx-auto"> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Sistem Informasi
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <embed src= 
                "img/akademik/kurikulum-si.pdf"
                               width="800"
                               height="500"
                               class="d-flex mx-auto"> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Teknik Komputer
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <embed src= 
                "img/akademik/kurikulum-tk.pdf"
                               width="800"
                               height="500"
                               class="d-flex mx-auto"> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
              Informatika
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <embed src= 
                "img/akademik/kurikulum-tk.pdf"
                               width="800"
                               height="500"
                               class="d-flex mx-auto"> 
            </div>
          </div>
        </div>
      </div>
</div>
@endsection