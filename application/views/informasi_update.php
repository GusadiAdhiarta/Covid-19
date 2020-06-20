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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

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

    <br><br>
    <div class="card text-center">
      <div class="card-header bg-light">
          <ul class="nav nav-pills container">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('informasi/')?>">Rumah Sakit</a>
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
              <a class="nav-link" href="<?php echo site_url('upaya/')?>">Upaya Pemerintah</a>
            </li>
          </ul>
        </center>
      </div>

      <div class="card-body">
        <center><H6><B>RUMAH SAKIT YANG MENAMPUNG PASIEN COVID-19</B></H6></center><BR>
        
        <form action="<?php echo site_url('informasi/prosesUpdate') ?>" method="post">
          <table border="0" align="center">
            <tr>
              <td height="50px">Nama Rumah Sakit</td>
              <td colspan="4"><input type="text" class="form-control" id="validationDefault01" placeholder="Masukan Nama Rumah Sakit" readonly name="Nama" value="<?php echo $rs->Nama; ?>"></td>
            </tr>
            <tr>
              <td height="50px">Alamat Rumah SAkit</td>
              <td colspan="4"><input type="text" class="form-control" id="validationDefault01" placeholder="Masukan Alamat Rumah Sakit" required name="Alamat" value="<?php echo $rs->Alamat; ?>"></td>
            </tr>
            <tr>
              <td height="50px">Kuota Rumah Sakit</td> <td><input type="number" class="form-control" id="validationDefault01" placeholder="Kuota Rumah Sakit" required name="Kuota" value="<?php echo $rs->Kuota; ?>"></td>
              <td width="20px"></td><td>Kuota Terisi</td> <td><input type="number" class="form-control" id="validationDefault01" placeholder="Terisi" required name="Terisi" value="<?php echo $rs->Terisi; ?>"></td>
            </tr>
            <tr>
              <td colspan="5"><center> <button class="btn btn-primary" type="submit">UPDATE DATA</button></center></td>
            </tr>
          </table>
        </form> 


      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
  </body>
</html>