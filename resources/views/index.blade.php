<?php
use Carbon\Carbon;
Carbon::setLocale('id');
?>
@extends('layouts.main')

@section('container')

  <!--Bagian komponen carousel-->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner bg-dark">
      <div class="carousel-item active">
        <img src="img/home/FTI-1.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block mx-auto" height="600" />
      </div>
      <div class="carousel-item">
        <img src="img/home/FTI-2.jpeg" class="bd-placeholder-img bd-placeholder-img-lg d-block mx-auto" height="600" />
      </div>
      <div class="carousel-item">
        <img src="img/home/FTI-3.jpeg" class="bd-placeholder-img bd-placeholder-img-lg d-block mx-auto" height="600" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Bagian website luar-->
   <div class="container text-center d-flex w-full justify-content-around py-5">
    <div class="row">
        <div class="col">
        <a href="https://fti.unand.ac.id/en/component/banners/click/12.html">
          <div class="card" style="width: 18rem; height: 12rem;">
            <img src="img/home/sipena.png" width="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">SIPENA</h5>
            </div>
          </div>
        </a>
        </div>
        <div class="col">
          <a href="https://fti.unand.ac.id/en/component/banners/click/19.html" >
            <div class="card" style="width: 18rem; height: 12rem;">
              <img src="img/home/mbkm.png" class="card-img-top" width="100%" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">MBKM</h5>
            </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="https://fti.unand.ac.id/en/component/banners/click/13.html" >
            <div class="card" style="width: 18rem; height: 12rem;">
              <img src="img/home/portal.png" width="100%" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">PORTAL AKADEMIK</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
        <a href="https://fti.unand.ac.id/en/component/banners/click/15.html">
          <div class="card" style="width: 18rem; height: 12rem;">
            <img src="img/home/web-unand.png" height="55%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">UNAND LINK</h5>
            </div>
          </div>
        </a>
        </div>
    </div>
   </div>
   

  <!--Bagian berita-->
  <div class="container py-5">
    <h1>News &amp; Events</h1>
    <hr class="hr">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <a href="#" class="news-link">
          <h2 class="news-title">Usulan Pengganti Penerima Beasiswa KIP K Angkatan 2022 &amp; Bantuan UKT</h2>
          <p class="news- fw-lighter">Sabtu, 7 Oktober 2023</p>
        </a>
      </li>
      <li class="list-group-item">
        <a href="#" class="news-link">
          <h2 class="news-title">Surat Edaran Rektor Tentang "Pembukaan Portal Pembayaran UKT/SPP dan 
            Registrasi Ulang Mahasiswa Semester Ganjil TA 2023/2024"</h2>
          <p class="news- fw-lighter">Jumat, 6 Oktober 2023</p>
        </a>
      </li>
      <li class="list-group-item">
        <a href="#" class="news-link">
          <h2 class="news-title">Penyerahan Ijazah pada Wisuda V Tahun 2023</h2>
          <p class="news- fw-lighter">Senin, 2 Oktober 2023</p>
        </a>
      </li>
      <li class="list-group-item">
        <a href="#" class="news-link">
          <h2 class="news-title">FTI Adakan Acara Konsinyering Akreditasi IABEE Prodi Sistem Informasi</h2>
          <p class="news- fw-lighter">Rabu, 13 September 2023</p>
        </a>
      </li>
      <li class="list-group-item">
        <a href="#" class="news-link">
          <h2 class="news-title">Surat Edaran Rektor Tentang "Pembukaan Portal Pembayaran UKT/SPP dan R
            egistrasi Ulang Mahasiswa Semester Ganjil TA 2023/2024"</h2>
          <p class="news- fw-lighter">Rabu, 6 September 2023</p>
        </a>
      </li>
    </ul>
   </div>

   
   <!--Bagian Departmen-->
   <div class="text-center py-3">
      <h1 >DEPARTEMEN</h1>
      <div class="d-flex justify-content-around">
        <a href="http://sk.fti.unand.ac.id/">
          <img src="img/home/sk.jpeg" width="100%" class="rounded">
        </a>
        <a href="http://si.fti.unand.ac.id/">
          <img src="img/home/si.jpg" width="100%" class="rounded">
        </a>
      </div>
      <div class="mx-auto d-grid col-6 mt-5">
        <a href="http://if.fti.unand.ac.id/" class="py-5 px-5 bg-primary text-white text-decoration-none rounded fs-3">
            INFORMATIKA
        </a> 
      </div>
   </div>

   <div class="text-center py-5">
    <h1>PROFIL FTI UNAND</h1>
    <div class="d-flex justify-content-around">
      <iframe width="800" height="400"
      src="https://www.youtube.com/embed/rCOSHlNh2EI">
      </iframe>
    </div>
 </div>


 <!--Bagian kerja sama-->
   <div class="text-center py-5">
    <h1>PARTNER KAMI</h1>
    <div class="d-flex justify-content-center align-items-center">
      <img src="img/home/redhat.png" width="15%" height="20%" class="">
      <img src="img/home/cisco.png" width="15%" height="20%" class="mx-5">
      <img src="img/home/oracle.png" width="15%" height="20%" class="">
    </div>
   </div>
@endsection