<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Monitoring Suhu dan Kelembaban</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Laurensius Dede Suhardiman - IoT Engineer" name="keywords">
  <meta content="Monitoring Suhu dan Kelembaban berbasis web dan Mobile karya Laurensius Dede Suhardiman" name="description">
  <link href="<?php echo base_url('assets/img/deskripsi.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/magnific-popup/magnific-popup.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
</head>
<body onload="init();">
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">IoT Project</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#features">Monitoring</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="intro">
    <div class="intro-text">
      <h2>Selamat datang di IoT Project</h2>
      <p>Proyek Internet of Things Monitoring Suhu dan Kelembaban Berbasis Web dan Mobile Android</p>
      <a href="#about" class="btn-get-started scrollto">Download Aplikasi</a>
    </div>
    <div class="product-screens">
      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="<?php echo base_url('assets/img/monitoring.png');?>" alt="">
      </div>
      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="<?php echo base_url('assets/img/grafik.png');?>" alt="">
      </div>
      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="<?php echo base_url('assets/img/about.png');?>" alt="">
      </div>
    </div>
  </section>
  <main id="main">
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Tentang IoT Project </h3>
          <span class="section-divider"></span>
          <p class="section-description">
            "Teknologi untuk semesta" 
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="<?php echo base_url('assets/img/deskripsi.png'); ?>" alt="">
          </div>
          <div class="col-lg-6 content wow fadeInRight">
            <h2>Deskripsi Singkat</h2>
            <h3>http://iot-project.laurensius-dede-suhardiman.com</h3>
            <p>
              Hai, perkenalkan nama saya Laurensius Dede Suhardiman dari Kabupaten Kuningan, Jawa Barat. 
              IoT Project adalah proyek pribadi yang saya kerjakan sebagai bentuk penyaluran hobby. 
              Namun, disamping itu saya memiliki impian bahwa proyek ini dapat dikembangkan dan dapat bermanfaat bagi masayarakat secara umum.
              Fitur yang tersedia pada proyek ini antara lain :
            </p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Monitoring suhu dan kelembaban.</li>
              <li><i class="ion-android-checkmark-circle"></i> Visualisasi data ke dalam grafik.</li>
              <li><i class="ion-android-checkmark-circle"></i> Penyimpanan data dari sensor ke dalam database.</li>
            </ul>
            <p>
              Salam,
            </p>
            <p></p>
            <p>
              <b>Laurensius Dede Suhardiman</b>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Monitoring</h3>
              <span class="section-divider"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 features-img">
            <img src="<?php echo base_url('assets/img/product-features.png');?>" alt="" class="wow fadeInLeft">
          </div>
          <div class="col-lg-8 col-md-7 ">
            <div class="row" id="sensor_offline">
              <div class="col-lg-12 col-md-12 box wow fadeInLeft">
                <div class="icon">
                    <i class="ion-ios-cloudy"></i>
                </div>
                <h4 class="title"><a href="">Whoops . . . Sensor offline!</a></h4>
                <p class="description">Saat ini Anda tidak dapat melakukan monitoring, sensor dalam keadaan offline. Untuk informasi lebih lanjut silakan hubungi melalui kontak yang tersedia. Terima kasih.</p>
              </div>
            </div>
            <div class="row" id="sensor_online">
              <div class="col-lg-12 col-md-12 box wow fadeInLeft">
                <p class="description">Suhu dan kelembaban yang dikirim dari sensor pada tanggal <span id="datetime"></span></p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon">
                    <i class="ion-thermometer"></i>
                    <h2><span id="nilai_suhu">0</span><sup> o</sup>C</h2>
                </div>
                <h4 class="title"><a href="">Suhu</a></h4>
                <p class="description"></p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon">
                    <i class="ion-ios-snowy"></i>
                    <h2><span id="nilai_kelembaban">0</span> %</h2>
                </div>
                <h4 class="title"><a href="">Kelembaban</a></h4>
                <p class="description"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Download</h3>
            <p class="cta-text">Dapatkan Aplikasi IoT Project untuk Android. Pantau suhu dan kelembaban dari perangkat Android.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Download</a>
          </div>
        </div>
      </div>
    </section>  
    <section id="more-features" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Informasi Lainnya</h3>
          <span class="section-divider"></span>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-podium"></i></div>
              <h4 class="title"><a href="">Jumlah Record Hari Ini</a><br></h4>
              <p class="description">Jumlah record yang dikirim dari sensor pada hari ini, 
              tanggal <?php echo date('d-M-Y') ?> sebanyak <b><span id="today_record">0</span></b> record.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-podium"></i></div>
              <h4 class="title"><a href="">Total Record</a></h4>
              <p class="description">Jumlah record seluruhnya yang tersimpan di database server sebanyak <b><span id="total_record">0</span></b> record.</p>
            </div>
          </div>
          <div class="col-lg-12" id="grafik_box_suhu">
            <div class="box wow fadeInRight">
              <div class="container">  
                <iframe src="<?php echo site_url('iot/grafik_suhu/'); ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-lg-12" id="grafik_box_kelembaban">
            <div class="box wow fadeInLeft">
              <div class="container">  
                <iframe src="<?php echo site_url('iot/grafik_kelembaban/'); ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="clients">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Teknologi yang digunakan</h3>
          <span class="section-divider"></span>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-md-3">
            <img src="<?php echo base_url('assets/img/clients/codeigniter.png'); ?>" alt="">
          </div>
          <div class="col-md-3">
            <img src="<?php echo base_url('assets/img/clients/arduino.png'); ?>" alt="">
          </div>
          <div class="col-md-3">
            <img src="<?php echo base_url('assets/img/clients/esp8266.png'); ?>" alt="">
          </div>
          <div class="col-md-3">
            <img src="<?php echo base_url('assets/img/clients/mysql.png'); ?>" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-3">
            <div class="contact-about">
              <h3>IoT Project</h3>
              <p>Untuk menyampaikan pertanyaan, saran, kritik, diskusi maupun proyek, Anda dapat menghubungi saya melalui kontak dan media sosial yang tersedia. Terima kasih.</p>
              <div class="social-links">
                <a target="_blank" href="https://twitter.com/renzcybermedia" class="twitter"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="https://facebook.com/saya.laurensius" class="facebook"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://instagram.com/laurensius" class="instagram"><i class="fa fa-instagram"></i></a>
                <a target="_blank" href="https://plus.google.com/u/1/+LaurensiusDS?hl=id" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/laurensiusds/" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Lingkungan Puhun (Lumbu)<br>RT 18 RW 07 Kel/Kec.Cigugur <br> Kab.Kuningan, Jawa Barat 45552 </p>
              </div>
              <div>
                <i class="ion-ios-email-outline"></i>
                <p>burglar.tea@gmail.com atau <br> saya@laurensius-dede-suhardiman.com</p>
              </div>
              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>Whatsapp +6287847328677</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.444204810687!2d108.4539175!3d-6.9666642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x176ddc3179d2f8d2!2sLaurensius+Research+and+Development!5e0!3m2!1sid!2sid!4v1524818574576" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong><a href="http://laurensius-dede-suhardiman.com/" target="_blank">Laurensius Dede Suhardiman</a></strong>. 
          </div>
          <div class="credits">
            <!-- Thanks to <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a> -->
          </div>
        </div>
        <div class="col-lg-6">
          <!-- <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav> -->
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/hoverIntent.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/superfish.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/lib/magnific-popup/magnific-popup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/contactform/contactform.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url("assets/justgage/justgage-1.1.0.js");?>" type="text/javascript"></script>
  <script src="<?php echo base_url("assets/justgage/raphael-2.1.4.min.js");?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/chart/highcharts.js'); ?>"></script>
  <script>
    function init(){
        $('#sensor_online').hide();
        $('#sensor_offline').hide();
        $('#grafik_box_suhu').hide();
        $('#grafik_box_kelembaban').hide();
    }

    function setOnline(){
        $('#sensor_online').show();
        $('#sensor_offline').hide();
        $('#grafik_box_suhu').show();
        $('#grafik_box_kelembaban').show();
    }

    function setOffline(){
        $('#sensor_online').hide();
        $('#sensor_offline').show();
        $('#grafik_box_suhu').hide();
        $('#grafik_box_kelembaban').hide();
    }
    
    $(document).ready(function(){
        function load_data(){
          $.ajax({
              url : '<?php echo site_url("api/monitoring/") ?>' ,
              type : 'GET',
              dataType : 'json',
              cache: false,
              contentType: false,
              processData: false,
              success : function(response){
                  if(response.data.status_sensor[0].status == "Offline"){
                      setOffline();
                  }else{
                      setOnline();
                      $('#nilai_suhu').html(response.data.monitoring[response.data.monitoring.length - 1].suhu);
                      $('#nilai_kelembaban').html(response.data.monitoring[response.data.monitoring.length - 1].kelembaban);
                      $('#datetime').html(response.data.monitoring[response.data.monitoring.length - 1].datetime);
                      
                      $('#today_record').html(response.data.today_record[0].today_record);
                      $('#total_record').html(response.data.total_record[0].total_record);    
                  }
              },
              error : function(response){
              console.log(response);
              },
          });
        }
        setInterval(function(){load_data();},3000);
    }); 
  </script>
</body>
</html>
