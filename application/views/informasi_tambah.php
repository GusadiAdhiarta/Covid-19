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
              <a class="nav-link active " href="<?php echo site_url('informasi/')?>">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('pencegahan/')?>">Pencegahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php echo site_url('deteksi/')?>">Deteksi Covid</a>
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
        <form action="<?php echo site_url('informasi/prosestambah'); ?>" method="post">
          <table border="0" align="center">
            <tr>
              <td height="50px">Nama Rumah Sakit</td>
              <td colspan="4"><input type="text" class="form-control" id="validationDefault01" placeholder="Masukan Nama Rumah Sakit" required name="Nama"></td>
            </tr>
            <tr>
              <td height="50px">Alamat Rumah Sakit</td>
              <td colspan="4"><input type="text" class="form-control" id="validationDefault01" placeholder="Masukan Alamat Rumah Sakit" required name="Alamat"></td>
            </tr>
            <tr>
              <td height="50px">Kuota Rumah Sakit</td> <td><input type="number" class="form-control" id="validationDefault01" placeholder="Kuota Rumah Sakit" required name="Kuota"></td>
              <td width="20px"></td><td>Kuota Terisi</td> <td><input type="number" class="form-control" id="validationDefault01" placeholder="Terisi" required name="Terisi"></td>
            </tr>
            <tr>
              <td colspan="5"><center> <button class="btn btn-primary" type="submit">Tambah Data</button></center></td>
            </tr>
          </table>
        </form> 
        <br><br>
        <table border="1" class="table" id="example">
          <thead class="thead-dark">
            <tr>
              <th scope="col" width="5%">No</th>
              <th scope="col" width="20%">Nama Rumah Sakit</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kuota</th>
              <th scope="col">Terisi</th>
              <th scope="col">Tersisa</th>
              <th scope="col" width="15%">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php $no = 1; foreach ( $rs->result() as $value) { ?>
            <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $value->Nama; ?> </td>
                <td><?php echo $value->Alamat; ?> </td>
                <td><?php echo $value->Kuota; ?> </td>
                <td><?php echo $value->Terisi; ?> </td>
                <td>
                <?php 
                  $sisa = $value->Kuota - $value->Terisi;
                  echo $sisa;
                ?>
                </td>
                <td>
                  <?php
                    $HAPUS = '<a href="'.site_url("informasi/hapus_RS/".$value->Nama).'">HAPUS</a>';
                    $EDIT = '<a href="'.site_url("informasi/update_Data/".$value->Nama).'">EDIT</a>'; 
                  ?>
                  <button type="button" class="btn btn-light"><?php echo "$EDIT";  ?></button>
                  <button type="button" class="btn btn-light"><?php echo "$HAPUS ";  ?></button>
                </td>
            </tr>
          </tbody>
          <?php $no++; } ?>
        </table>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>