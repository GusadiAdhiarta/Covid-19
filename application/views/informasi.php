<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <title>Covid-19</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>    

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
        <?php 
            if ($this->session->userdata('level')=="1") {
        ?>
          <div align="left"><button type="button" class="btn btn-warning text-white"> 
            <a href="<?php echo site_url('informasi/tambah_data/')?>"><b>Tambah Data</b></a>
          </button> </div>
        <?php } ?>
          <div align="left"><button type="button" class="btn btn-warning text-white"> 
            <a href="<?php echo site_url('chart/')?>"><b>Tampilkan chart</b></a>
          </button></div>
          <br>
          
        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col" width="5%">No</th>
              <th scope="col" width="20%">Nama Rumah Sakit</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kuota</th>
              <th scope="col">Terisi</th>
              <th scope="col">Tersisa</th>
              <?php 
                if ($this->session->userdata('level')=="1") {
              ?>
                <th scope="col" width="15%">Aksi</th>
                <?php } ?>
            </tr>
          </thead>

          <tbody id="rs">
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
                <?php if ($this->session->userdata('level')=="1") { ?>
                <td>
                  <?php
                    $HAPUS = '<a href="'.site_url("informasi/hapus_RS/".$value->Nama).'">HAPUS</a>';
                    $EDIT = '<a href="'.site_url("informasi/update_Data/".$value->Nama).'">EDIT</a>'; 
                            
                  ?>
                  
                  <button type="button" class="btn btn-light "><?php echo "$EDIT";  ?></button>
                  <button type="button" class="btn btn-light"><?php echo "$HAPUS ";  ?></button>
                  
                </td>
                <?php } ?>
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
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  </body>
</html>