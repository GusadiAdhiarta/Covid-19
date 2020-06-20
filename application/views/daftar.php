<!DOCTYPE html>
<html>
  <title>Register</title>
  <head>
      
    <style>
        body{
          background: url('<?php echo base_url();?>/assets/image/bg.jpeg');
        }
        form{
            width: 560px;
        }
        #view_pass, #view_pass2{
            float: right;
            margin-right: 20px;
            margin-top: -41px;
            position: relative;
            z-index: 2;
            cursor: pointer;
        }
        .alert{
            color: red;
            margin-top: -2px;
            visibility: hidden;
        }
        h3 {
          text-align:center;
        }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/validasi.js"></script>
  </head>
  <body>
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
      </div>
  </nav>
  <form action="<?php echo site_url('Login/aksiDaftar/');?>" style="margin-top: 60px;" onsubmit="return validasi()" method="post">
      <h1>REGISTER</h1>
      <div class="icon">
        <img width="90px" src="<?php echo base_url();?>/assets/image/usericon.png" alt="user">
      </div>
      <div class="formcontainer">
      <div class="container" style="margin-top: -20px;">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" name="username" id="username" placeholder="Masukan Username"><br>
        <p class="alert" id="u_alert" ></p>
        <label for="psw" ><strong>Password</strong></label>
        <input class="active" type="password" name="password" id="password"  placeholder="Masukan Password">
        <span class="fa fa-eye-slash fa-lg" id="view_pass"></span>
        <p class="alert" id="p_alert" ></p>
        <label for="psw"><strong>Konfirmasi Password</strong></label>
        <input class="active" type="password" name="password2" id="password2"  placeholder="Konfirmasi Password">
        <span class="fa fa-eye-slash fa-lg" id="view_pass2"></span>
        <p class="alert" id="p_alert2" ></p>
    </div>
      <button type="submit" style="width: 100%; margin-top: -30px;"><strong>Register</strong></button>
      <div class="container" style="background-color: #eee" >
        <label style="padding-left: 15px; color: #000;">
            Sudah memiliki akun? <a href="<?php echo site_url('Login');?>">Login</a>
        </label>
      </div>
    </form>
  </body>
<script type="text/javascript">
  </script>
</html>
