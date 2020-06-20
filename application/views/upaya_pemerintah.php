<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <title>Covid-19</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  </head>

  <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php echo site_url('beranda/')?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url('aboutus/')?>">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url('informasi/')?>">Informasi</a>
          </li>
        </ul>
        <?php 
            if ($this->session->userdata('status')=="login") {
          ?>
              <button class='btn btn-success my-2 my-sm-0 text-white' onclick="window.location='<?php echo site_url()?>/login/logout'">Logout</button>
          <?php }else { ?>
              <button class='btn btn-success my-2 my-sm-0 text-white' onclick="window.location='<?php echo site_url()?>/login'">Login</button>
          <?php  } ?>
      </div>
    </nav>

    <br><br>
    <div class="card text-center">
      <div class="card-header bg-light">
          <ul class="nav nav-pills container">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('informasi/')?>">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('pencegahan/')?>">Pencegahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('deteksi/')?>">Deteksi Covid</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('peta/')?>">Peta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('upaya/')?>">Upaya Pemerintah</a>
            </li>
          </ul>
      </div>

      <div class="card-body">
      		<div class="text"><CENTER><H1>Upaya Pemerintah dalam Menangani Covid-19 di Indonesia</H1></CENTER></div>
      </div>
    </div><br><br>
    <table border="0">
      <tr>
        <td width="2%"></td>
        <td><h5><b>1.    Pemerintah Indonesia, melalui Kementerian Kesehatan, telah melakukan berbagai langkah pencegahan masuknya COVID-19 ke wilayah Indonesia, yaitu:</b><br></h5></td>
      </tr>
    </table>
<table border="0" width="100%">
  <tr>
    <td align="right" width="5%">a.</td>
    <td>Menerbitkan surat edaran kepada seluruh Dinas Kesehatan Provinsi dan Kab/Kota, Rumah Sakit Rujukan, Kantor Kesehatan Pelabuhan (KKP), dan Balai Teknik Kesehatan Lingkungan (BTKL), untuk </td>
  </tr>
  <tr>
    <td></td>
    <td>meningkatkan kewaspadaan dan kesiapsiagaan dalam menghadapi kemungkinan masuknya penyakit ini.</td>
  </tr>
  <tr>
    <td align="right">b.</td>
    <td>Menempatkan 135 thermal scanner di seluruh bandar udara di Indnesia terutama yang mempunyai penerbangan langsung dari Republik Rakyat Tiongkok (RRT).</td>
  </tr>
  <tr>
    <td align="right">c.</td>
    <td>Memberikan health alert card dan Komunikasi, Informasi, dan Edukasi (KIE) pada penumpang</td>
  </tr>
  <tr>
    <td align="right">d.</td>
    <td>Menunjuk sedikitnya 100 Rumah Sakit Rujukan yang sebelumnya dipakai pada kasus flu burung dan menyiapkan 21 kapsul evakuasi (meja dorong isolasi pasien) sebagai langkah pencegahan.</td>
  </tr>
</table>
<br>
    <table border="0">
      <tr>
        <td width="2%"></td>
        <td><h5><b>2.    Kementerian Kesehatan membuka kontak layanan yang dapat diakses masyarakat untuk mencari informasi perihal virus corona. Nomor layanan informasi yang dapat dihubungi adalah 0215210411 dan +6281212123119.</b></h5></td>
      </tr>
    </table>
<br>
    <table border="0" width="100%">
      <tr>
        <td width="2%"></td>
        <td><h5><b>3.    Pada 2 Februari 2020, Pemerintah Indonesia mengumumkan:</b></h5></td>
      </tr>
    </table>
<table border="0" width="100%">
  <tr>
    <td align="right" width="5%">a.</td>
    <td>Penundaan seluruh penerbangan dari dan ke RRT yang berlaku mulai 5 Februari 2020 pukul 00.00 WIB.</td>
  </tr>
  <tr>
    <td align="right">b.</td>
    <td>Pencabutan sementara bebas visa dan visa on arrival untuk warga negara RRT.</td>
  </tr>
  <tr>
    <td align="right">c.</td>
    <td>Pencabutan sementara bebas visa dan visa on arrival untuk warga negara RRT.</td>
  </tr>
  <tr>
    <td align="right">d.</td>
    <td>Penghentian sementara impor live animal dari RRT.</td>
  </tr>
</table>
<br>
    <table border="0">
      <tr>
        <td width="2%"></td>
        <td><h5><b>4.    Sebagai bentuk perlindungan, Pemri telah memulangkan WNI dari Provinsi Hubei, RRT, pada 2 Februari 2020. Kepada para WNI tersebut telah diterapkan langkah-langkah sebagai berikut: </b></h5></td>
      </tr>
    </table>
      
<table border="0" width="100%">
  <tr>
    <td align="right" width="5%">a.</td>
    <td>Memastikan ketersediaan dan akses terhadap logistic di Wuhan (sebelum dilakukan evakuasi): karena adanya kebijakan karantina dari Pemerintah RRT, KBRI Beijing telah mengirimkan bantuan dana </td>
  </tr>
  <tr>
    <td></td>
    <td>kepada WNI yang sebagian besar merupakan mahasiswa untuk keperluan membeli makanan dan logistic di Wuhan.</td>
  </tr>
  <tr>
    <td align="right">b.</td>
    <td>Mengirimkan bantuan logistic dari Indonesia: BNPB melalui Kementerian Luar Negeri dan KBRI Beijing telah mengirimkan 10.000 masker N-95 untuk WNI di RRT.</td>
  </tr>
  <tr>
    <td align="right">c.</td>
    <td>Melakukan penjemputan sukarela: 237 WNI dan 1 WNA yang berada di Provinsi Hubei pada tanggal 1 – 2 Februari 2020.</td>
  </tr>
  <tr>
    <td align="right">d.</td>
    <td>Sejak tanggal 2 Februari 2020, seluruh WNI bersama 5 tim aju dari KBRI Beijing serta 42 anggota tim evakuasi menjalani observasi kesehatan selama 14 hari (masa inkubasi virus) di Pangkalan Udara TNI</td>
  </tr>
  <tr>
    <td></td>
    <td>AU Raden Sadjad di Pulau Natuna.</td>
  </tr>
  <tr>
    <td align="right">e.</td>
    <td>Pada 15 Februari 2020, seluruh WNI beserta tim evakuasi telah menyelesaikan masa karantina observasi kesehatan dan dinyatakan sehat, bebas dari virus corona.​</td>
  </tr>
</table>
<br>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
  </body>
</html>