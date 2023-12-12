@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="my-3">Layanan</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" 
            aria-expanded="true" aria-controls="collapseOne">
              Form Layanan
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <a href="https://forms.office.com/r/zERLHWAmya" class="form-layanan">Surat Keterangan Aktif Kuliah</a>
                <br/>
                <a href="https://forms.gle/Z6kH4CJu4smq9Dbo8" class="form-layanan">Surat Keterangan Lulus</a>
                <br/>
                <a href="https://forms.office.com/r/zTvPaWMDed" class="form-layanan">Legalisir Ijazah dan Transkrip Nilai</a>
                <br/>
                <a href="https://forms.office.com/r/563ir0Ux9D" class="form-layanan">Pengembalian UKT</a>
                <br/>
                <a href="https://forms.office.com/r/563ir0Ux9D" class="form-layanan">Pengunduran Diri atau Pindah Mahasiswa</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" 
            aria-expanded="false" aria-controls="collapseTwo">
              Download Dokumen
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Daftar dokumen-dokumen Fakultas Teknologi Informasi Universitas Andalas : </p>
                <table style="height: 286px; width: 537.333px;" class="table">
                    <tbody>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;"><strong>No</strong></td>
                    <td style="width: 602px; text-align: center; height: 14px;"><strong>Nama Dokumen</strong></td>
                    <td style="width: 23.3334px; text-align: center; height: 14px;"><strong>Link Download</strong></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">1</td>
                    <td style="width: 602px; height: 14px;">Permohonan Pengunduran Diri</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Form%20Permohonan%20Pengunduran%20Diri%20Mahasiswa%20-%20FTIUA%20(1).docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">2</td>
                    <td style="width: 602px; height: 14px;">Permohonan Berhenti Studi Sementara (BSS)</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Form%20Permohonan%20Berhenti%20Studi%20Sementara.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">3</td>
                    <td style="width: 602px; height: 14px;">Permohonan Pindah Fakultas</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir
                      /formulir%20pindah%20antar%20fakultas%20di%20universitas%20andalas.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">4</td>
                    <td style="width: 602px; height: 14px;">Permohonan Kliring Wisuda</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen
                      /Formulir/Surat%20Permohonan%20Clearing%20Fakultas.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">5</td>
                    <td style="width: 602px; height: 14px;">Surat Keterangan Pengambilan Ijazah</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/SURAT%20KET%20PENGAMBILAN%20IJAZAH.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">6</td>
                    <td style="width: 602px; height: 14px;">Surat Pernyataan Wisuda</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      other/SURAT-PERNYATAAN%20WISUDA.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">7</td>
                    <td style="width: 602px; height: 14px;">Permohonan Penurunan UKT</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Permohonan%20Penurunan%20UKT.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">8</td>
                    <td style="width: 602px; height: 14px;">Permohonan Penyesuaian UKT</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen
                      /Formulir/Form-Penyesuaian-UKT.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">9</td>
                    <td style="width: 602px; height: 14px;">Permohonan Pengembalian UKT</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Form-Pengembalian-UKT.doc">Download</a></td>
                    </tr>
                    <tr style="height: 15px;">
                    <td style="width: 32px; text-align: center; height: 15px;">10</td>
                    <td style="width: 602px; height: 15px;">Permohonan Pengembalian UKT (bagi Mahasiswa yang Lulus Sidang TA)</td>
                    <td style="width: 23.3334px; height: 15px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/FORM%20PENGEMBALIAN%20UKT_.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">11</td>
                    <td style="width: 602px; height: 14px;">Permohonan Penundaan Biaya Pendidikan</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Form%20Penundaan%20Biaya%20Kuliah-WD2.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">12</td>
                    <td style="width: 602px; height: 14px;">Permohonan Pembukaan Pembayaran Biaya Pendidikan&nbsp;</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Form%20Pembukaan%20Pembayaraan%20Biaya%20Pendidikan%20-WD2.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">13</td>
                    <td style="width: 602px; height: 14px;">Perjanjian Penyelesaian Studi &amp; Peningkatan IP</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/SURAT%20PERJANJIAN%20PENYELESAIAN%20STUDI.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">14</td>
                    <td style="width: 602px; height: 14px;">Surat Pernyataan tidak sedang menerima Beasiswa Lain</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Surat%20Pernyataan%20Sedang%20Tidak%20Menerima%20Beasiswa%20Lain%20(4).docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">15</td>
                    <td style="width: 602px; height: 14px;">Form TOR KKN Tematik Pencegahan Covid-19</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Form%20TOR%20KKN%20Tematik%20Pencegahan%20Covid-19.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 32px; text-align: center; height: 14px;">16</td>
                    <td style="width: 602px; height: 14px;">Form Permohonan Seleksi Program TELADAN 2022 Afirmasi</td>
                    <td style="width: 23.3334px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Form-Permohonan%20Seleksi%20Program%20Teladan%202022%20Afirmasi.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14.3125px;">
                    <td style="width: 32px; text-align: center; height: 14.3125px;">17</td>
                    <td style="width: 602px; height: 14.3125px;">Surat Pernyaataan tidak sedang menerima Beasiswa Lain 
                      - Beasiswa Dana Hibah Rajawali</td>
                    <td style="width: 23.3334px; height: 14.3125px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      SURAT%20PERNYATAAN%20TIDAK%20SEDANG%20MENERIMA%20BEASISWA%20LAIN%20-%20BEASISWA%20HIBAH.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14.3125px;">
                    <td style="width: 32px; text-align: center; height: 14.3125px;">18</td>
                    <td style="width: 602px; height: 14.3125px;">Surat Rekomendasi Mahasiswa Program Magang dan 
                      Studi Independen Bersertifikat Kampus Merdeka</td>
                    <td style="width: 23.3334px; height: 14.3125px;"><a href="https://fti.unand.ac.id/
                      images/Dokumen/Formulir/
                      SURAT%20REKOMENDASI%20MAHASISWA%20PROGRAM%20MAGANG.-DRAFT%20(2).docx">Download</a></td>
                    </tr>
                    </tbody>
                    </table>

                    <p class="fw-bold">Form Permohonan Penyesuaian UKT </p>
                <table style="height: 199px; width: 536px;" class="table">
                    <tbody>
                    <tr style="height: 30px;">
                    <td style="width: 28.0532px; height: 30px; text-align: center;"><strong>No</strong></td>
                    <td style="width: 432.947px; height: 30px; text-align: center;"><strong>Nama Dokumen</strong></td>
                    <td style="width: 46px; height: 30px; text-align: center;"><strong>Link Download</strong></td>
                    </tr>
                    <tr style="height: 12.625px;">
                    <td style="width: 28.0532px; height: 12.625px; text-align: center;">1</td>
                    <td style="width: 432.947px; height: 12.625px;">Surat Permohonan Usulan Penyesuaian UKT</td>
                    <td style="width: 46px; height: 12.625px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Contoh%20Surat%20Permohonan%20Mahasiswa%20Semester%20Ganjil%202023.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 28.0532px; height: 14px; text-align: center;">2</td>
                    <td style="width: 432.947px; height: 14px;">Surat Pernyataan Mengambil 6 SKS</td>
                    <td style="width: 46px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Surat%20Penyataan%20mengambil%206%20SKS-.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 28.0532px; height: 14px; text-align: center;">3</td>
                    <td style="width: 432.947px; height: 14px;">Surat Pernyataan telah Menyelesaikan Pembelajaran</td>
                    <td style="width: 46px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Surat%20Pernyataan%20telah%20menyelesaikan%20pembelajaran.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 28.0532px; height: 14px; text-align: center;">4</td>
                    <td style="width: 432.947px; height: 14px;">Berita Acara Verifikasi Keringanan UKT</td>
                    <td style="width: 46px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/Formulir/
                      Berita%20Acara%20Verifikasi%20Keringanan%20UKT.doc">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 28.0532px; height: 14px; text-align: center;">5</td>
                    <td style="width: 432.947px; height: 14px;">Surat Permohonan Bantuan Biaya UKT</td>
                    <td style="width: 46px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Surat%20Permohonan%20Bantuan%20Biaya%20UKT.docx">Download</a></td>
                    </tr>
                    <tr style="height: 14px;">
                    <td style="width: 28.0532px; height: 14px; text-align: center;">6</td>
                    <td style="width: 432.947px; height: 14px;">Surat Keterangan tidak sedang menerima Beasiswa Lain</td>
                    <td style="width: 46px; height: 14px;"><a href="https://fti.unand.ac.id/images/Dokumen/
                      Formulir/Surat%20Keterangan%20TSMBL.docx">Download</a></td>
                    </tr>
                    </tbody>
                    </table>

                    <p>Form Seminar Hasil dan Sidang Tugas Akhir </p>
                    <table style="height: 106px; width: 538px;" class="table">
                        <tbody>
                        <tr style="height: 9.27084px;">
                        <td style="width: 28px; height: 9.27084px; text-align: center;"><strong>No</strong></td>
                        <td style="width: 422px; height: 9.27084px; text-align: center;"><strong>Nama Dokumen</strong></td>
                        <td style="width: 64px; height: 9.27084px;"><strong>Link Download</strong></td>
                        </tr>
                        <tr style="height: 19px;">
                        <td style="width: 28px; height: 19px; text-align: center;">1</td>
                        <td style="width: 422px; height: 19px;">Form Seminar Hasil Jurusan Sistem Informasi</td>
                        <td style="width: 64px; height: 19px;"><a href="/images/Dokumen/Formulir/Form-Form-TA%205-7.docx">Download&nbsp;</a></td>
                        </tr>
                        <tr style="height: 20px;">
                        <td style="width: 28px; height: 20px; text-align: center;">2</td>
                        <td style="width: 422px; height: 20px;">Form Sidang TA Jurusan Sistem Informasi</td>
                        <td style="width: 64px; height: 20px;"><a href="/images/Dokumen/Formulir/Form-Form-TA%2015.docx">Download</a></td>
                        </tr>
                        <tr style="height: 20px;">
                        <td style="width: 28px; height: 20px; text-align: center;">3</td>
                        <td style="width: 422px; height: 20px;">Form Sidang TA Jurusan Teknik Komputer</td>
                        <td style="width: 64px; height: 20px;"><a href="http://sk.fti.unand.ac.id/index.php/en/informasi/ta/fta">Download</a></td>
                        </tr>
                        </tbody>
                        </table>

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
             aria-expanded="false" aria-controls="collapseThree">
              Syarat Pengurusan Dokumen
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <embed src= 
                "assets/layanan/syarat.pdf"
                               width="800"
                               height="500"
                               class="d-flex mx-auto"> 
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
               aria-expanded="false" aria-controls="collapseFour">
                Standar Layanan
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p class="fw-bold">a. Waktu Layanan</p>
                  <div class="ms-3">
                      <p> Senin – Kamis                   : 08.00 - 16.00 WIB </p>
                      <p>Jumat                              : 08.00 - 16.30 WIB </p>
                  </div>
                  <p class="fw-bold">b. Waktu Istirahat</p>
                  <div class="ms-3">
                      <p> Senin – Kamis                   : 12.00 - 13.00 WIB </p>
                      <p>Jumat                              : 12.00 - 13.30 WIB </p>
                  </div>
              </div>
            </div>
          </div>
        
      </div>
      </div>
      

</div>
@endsection