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
                    <tr>
                      <th scope="row">1</th><td>Adi Arga Arifnur, M.Kom</td>
                      <td>199208202019031005</td><td>PNS - Dosen Sistem Informasi</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th><td>Hasdi Putra, MT</td>
                      <td>198307272008121003</td><td>PNS - Dosen Sistem Informasi</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th><td>Afriyanti Dwi Kartika, MT</td>
                      <td>198904212019032024</td><td>PNS - Dosen Sistem Informasi</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th><td>Husnil Kamil, MT</td>
                      <td>198201182008121002</td><td>PNS - Dosen Sistem Informasi</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th><td>Aina Hubby Aziira, M.Eng</td>
                      <td>199504302022032013</td><td>PNS - Dosen Sistem Informasi</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th><td>Ir. Werman Kasoep, M.Kom</td>
                      <td>195709071992031001</td><td>PNS - Dosen Teknik Komputer</td>
                    </tr>
                    <tr>
                      <th scope="row">7</th><td>Arrya Anandika, M.T</td>
                      <td>199506232022031014</td><td>PNS - Dosen Teknik Komputer</td>
                    </tr>
                    <tr>
                      <th scope="row">8</th><td>Jefril Rahmadoni, M.Kom</td>
                      <td>198904152019031009</td><td>PNS - Dosen Sistem Informasi</td>
                    </tr>
                    <tr>
                      <th scope="row">9</th><td>Derisma, MT</td>
                      <td>198204192010122001</td><td>PNS - Dosen Teknik Komputer</td>
                    </tr>
                    <tr>
                      <th scope="row">10</th><td>Lathifah Arief, MT</td>
                      <td>198109122014042001</td><td>PNS - Dosen Teknik Komputer</td>
                    </tr>
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
                    <tr>
                      <th scope="row">1</th><td>Afdal</td>
                      <td>196901072014091001</td><td>PNS - Tenaga Kependidikan</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th><td>Qadriasih Wina Putri, MM</td>
                      <td>19880511201601163001</td><td>Honorer - Tenaga Kependidikan</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th><td>Derison</td>
                      <td>19850808201501161001</td><td>Honorer - Tenaga Kependidikan</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th><td>Resnia Vilda, A.Md</td>
                      <td>19930709201602162001</td><td>Honorer - Tenaga Kependidikan</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th><td>Dewi Herlina, A.Md</td>
                      <td>197803222001122002</td><td>PNS - Tenaga Kependidikan</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th><td>Riki Basra, A.Md</td>
                      <td>197605142001121003</td><td>PNS - Tenaga Kependidikan</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
              data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                Pimpinan
              </button>
            </h2>
            <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
              <div class="accordion-body">
                  <img src="img/profil/pimpinan.jpeg" width="600px" class="mx-auto d-flex"/>
              </div>
            </div>
          </div>
        </div>
  </div>
@endsection