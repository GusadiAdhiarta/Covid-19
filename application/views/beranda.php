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
        <br><br>
        <div class="text">
          <br><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">COVID-19</h5>
                  <p class="card-text">COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus.  Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">OTG  </h5>
                  <p class="card-text">Orang Tanpa Gejala (OTG) merupakan seseorang yang tidak memiliki gejala dan memiliki risiko tertular dari orang terkonfirmasi COVID-19.<br> Orang yang memiliki riwayat kontak dekat dengan kasus konfirmasi COVID-19 dapat masuk dalam kriteria ini. </p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">PDP</h5>
                  <p class="card-text">Pasien Dalam Pengawasan (PDP) akan dikriteriakan sesuai dengan gejala yang nampak termasuk demam, batuk, sesak napas, hingga sakit tenggorokan.<br><br> 
                  Orang yang dinyatakan masuk kategori PDP akan menjalani proses observasi melalui proses cek laboratorium yang hasilnya akan dilaporkan kepada Badan Penelitian dan Pengembangan Kesehatan</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">ODP  </h5>
                  <p class="card-text">Orang Dalam Pemantauan (ODP) ,Pasien ODP memiliki gejala yang lebih ringan pada umumnya, seperti batuk, sakit tenggorokan, dan demam. <br><br>
                  Dengan ketentuan tidak ada kontak erat dengan penderita positif. Pasien dengan status ODP dapat dipulangkan untuk selanjutnya melakukan karantina sendiri selama kurang lebih 14 hari.</p>
                </div>
              </div>
            </div>
          </div>
          <br><br>
      </div>
      <div class="text">
            <br><br>
            <div class="card-deck">
              <div class="card">
                <img src="<?php echo base_url('assets/img/positif.JPG'); ?>" class="card-img-top" alt="POSITIF">
                <div class="card-body">
                  <h5 class="card-title">PASIEN POSITIF</h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <table>
                        <?php foreach ($indonesia as $value) { ?>
                            <tr>
                                <td>Positif sebanyak : </td>
                                <td><?php echo $value['positif']; ?> </td>
                            </tr>
                        <?php } ?>
                    </table>
                  </small>
                </div>
              </div>
              
              <div class="card">
                <img src="<?php echo base_url('assets/img/sembuh1.JPG'); ?>" class="card-img-top" alt="SEMBUH">
                <div class="card-body">
                  <h5 class="card-title">PASIEN SEMBUH</h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <table>
                        <?php foreach ($indonesia as $value) { ?>
                            <tr>
                                <td>Sembuh sebanyak : </td>
                                <td><?php echo $value['sembuh']; ?> </td>
                            </tr>
                        <?php } ?>
                    </table>
                  </small>
                </div>
              </div>

              <div class="card">
                <img src="<?php echo base_url('assets/img/meninggal.JPG'); ?>" class="card-img-top" alt="MENINGGAL DUNIA">
                <div class="card-body">
                  <h5 class="card-title">PASIEN MENINGGAL DUNIA</h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <table>
                        <?php foreach ($indonesia as $value) { ?>
                            <tr>
                                <td>Meninggal sebanyak : </td>
                                <td><?php echo $value['meninggal']; ?> </td>
                            </tr>
                        <?php } ?>
                    </table>
                  </small>
                </div>
              </div>
            </div>
            <br><br>
            <div id="container"></div>
            <br><br>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
     
    $(function () {
        Highcharts.setOptions({
          colors: ['red', 'blue', 'green', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
        });

        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Data Kasus Covid-19'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Persentase Covid-19',
                backgroundColor: ['red','yellow','blue'],
                data: 
                [
                        <?php 
                        // data yang diambil dari database
                      
                        if(count($indonesia)>0)
                        {
                           foreach ($indonesia as $data) {

                                echo "[' Meninggal '," . $data['meninggal'] . "],\n";
                                echo "[' Positif '," . $data['positif'] . "],\n";
                                echo "[' Sembuh '," . $data['sembuh'] . "],\n";
                              }
                        }
                        ?>
                ]
            }]
        });
    }); </script>
  </body>
</html>