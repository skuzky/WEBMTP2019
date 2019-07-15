<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.css">
  <link href="<?php echo base_url();?> ../../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?> ../../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="assets/img/tittle_fix.png" style="max-width: 180px; padding-top: 19px; "></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php" class="active">HOME</a></li>
        <li><a href="index.php/mtp">MTP</a></li>
        <li><a href="index.php/login">LOGIN</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">MTP</a></li>
        <li><a href="#">MTP</a></li>
        <li><a href="#">LOGIN</a></li>
      </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      
      <div class="jumbotron jumbotron-fluid">

        <video autoplay muted loop poster="assets/img/poster_kampus4.png">    
            <source src="" data-src="assets/video/kampus4.mp4" type="video/mp4">
        </video>

          <div class="container text-white">

            <h1 class="display-4">TEKNIK INFORMATIKA</h1>
            <p class="lead">Web ini merupakan website pendaftaran manajemen tugas project</p>
            <a class="btn btn-primary btn-lg" href="index.php/mtp/tambahdata" role="button">Daftar Sekarang</a>

          </div>

        </div>

      <div class="row center">
      </div>
    </div>
  </div>


  <div class="container">
    <div class="section">
      <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Info Pendaftaran</span>
          <p>Pendaftaran Kelompok MTP akan diselenggarakan mulai tanggal 27 mei - 10 april 2019.</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
     &copy; Universitas Ahmad Dahlan 2019

      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
  <script src="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url();?>js/materialize.js"></script>
  <script src="<?php echo base_url();?>js/init.js"></script>
  <script type="text/javascript">
    function deferVideo() {

    //defer html5 video loading
  $("video source").each(function() {
    var sourceFile = $(this).attr("data-src");
    $(this).attr("src", sourceFile);
    var video = this.parentElement;
    video.load();
    // uncomment if video is not autoplay
    //video.play();
  });

}
window.onload = deferVideo;



  </script>

  </body>
</html>
