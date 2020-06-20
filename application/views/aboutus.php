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

  </head>

  <body background="<?php echo base_url("/assets/img/bg.JPG"); ?>">
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

    <div class="container">
      <br><br><br>
      <!-- <div class="text"> -->
        <div class="card mb-3" style="max-width: 1040px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url('assets/img/ida2.png'); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <center><h5 class="card-title">INFORMATIKA</h5></center>
                <table>
                  <tr>
                    <td>Nama</td><td>:</td><td> IDA BAGUS KOMANG KRIZENA ADHIARTA</td>
                  </tr>
                  <tr>
                    <td>NIM</td><td>:</td><td> 3411171047</td>
                  </tr>
                  <tr>
                    <td>KELAS</td><td>:</td><td> DSE-A</td>
                  </tr>
                  <tr>
                    <td>EMAIL</td><td>:</td><td> adhiartagusadi@gmail.com</td>
                  </tr>
                  <tr>
                    <td>NO-TLP</td><td>:</td><td> 0857-2145-0368 </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->
      
      <!-- <div class="text"> -->
        <div class="card mb-3" style="max-width: 1040px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url('assets/img/reji.JPEG'); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <center><h5 class="card-title">INFORMATIKA</h5></center>
                <table>
                  <tr>
                    <td>Nama</td><td>:</td><td> REJI PIKRIYANSAH</td>
                  </tr>
                  <tr>
                    <td>NIM</td><td>:</td><td> 3411171046</td>
                  </tr>
                  <tr>
                    <td>KELAS</td><td>:</td><td> DSE-A</td>
                  </tr>
                  <tr>
                    <td>EMAIL</td><td>:</td><td> reji1832@gmail.com</td>
                  </tr>
                  <tr>
                    <td>NO-TLP</td><td>:</td><td> 0821-1642-8260 </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->

      <!-- <div class="text"> -->
        <div class="card mb-3" style="max-width: 1040px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url('assets/img/dinda.JPEG'); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <center><h5 class="card-title">INFORMATIKA</h5></center>
                <table>
                  <tr>
                    <td>Nama</td><td>:</td><td>ADNI ADINDA PUTRI</td>
                  </tr>
                  <tr>
                    <td>NIM</td><td>:</td><td> 3411171043</td>
                  </tr>
                  <tr>
                    <td>KELAS</td><td>:</td><td> DSE-A</td>
                  </tr>
                  <tr>
                    <td>EMAIL</td><td>:</td><td> adniadinda@gmail.com</td>
                  </tr>
                  <tr>
                    <td>NO-TLP</td><td>:</td><td> 0857-2259-4401 </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->

      <!-- <div class="text"> -->
        <div class="card mb-3" style="max-width: 1040px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?php echo base_url('assets/img/ecan.JPEG'); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <center><h5 class="card-title">INFORMATIKA</h5></center>
                <table>
                  <tr>
                    <td>Nama</td><td>:</td><td> FERSYAN PUTRA SAMUDRA</td>
                  </tr>
                  <tr>
                    <td>NIM</td><td>:</td><td> 3411171057</td>
                  </tr>
                  <tr>
                    <td>KELAS</td><td>:</td><td> DSE-A</td>
                  </tr>
                  <tr>
                    <td>EMAIL</td><td>:</td><td> fersyanaxi@gmail.com</td>
                  </tr>
                  <tr>
                    <td>NO-TLP</td><td>:</td><td> 0857-2048-8380 </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->


    </div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  </body>
</html>