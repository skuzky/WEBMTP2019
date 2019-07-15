<!DOCTYPE html>
<html>
<head>
	<title>Berhasil Masuk</title>
	  <!-- CSS  -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.css">
	  <link href="<?php echo base_url();?> ../../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="<?php echo base_url();?> ../../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<style type="text/css">
		.preloader {
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  z-index: 9999;
		  background-color: #fff;
		}
		.preloader .loading {
		  position: absolute;
		  left: 50%;
		  top: 50%;
		  transform: translate(-50%,-50%);
		  font: 14px arial;
		}

/*    html, body {
  background: white;
  font-family: "Titillium Web", serif;
  line-height: 1.667;
}*/

/*body {
  color: #373231;
  font-size: 16px;
  font-weight: normal;
}
*/
h1, h2, h3, h4, h5, h6 {
  margin: 0;
  padding: 0;
  line-height: normal;
  font-weight: normal;
}

h1 {
  font-size: 3rem;
}

h2, h3 {
  font-size: 1.5rem;
}

h3 {
  margin-bottom: .5em;
}

a {
  color: #2196F3;
  text-decoration: none;
}
a:hover {
  color: #0960a5;
}

ul {
  margin: 0;
  padding: 0;
}

ul.list-unstyled {
  list-style: none;
  list-position: outside;
}

hr {
  height: 0;
  box-sizing: content-box;
  margin-top: 1em;
  margin-bottom: 1em;
  border: 0;
  border-top: 1px solid #eee;
}

.align-left {
  float: left;
}

.align-right {
  float: right;
}

.cf:after {
  content: " ";
  display: table;
  height: 10px;
}

.share {
  color: #BBDEFB;
  transition: all 150ms ease-in-out;
}
.share:hover {
  color: #2196F3;
}

.alert {
  color: #E91E63;
  opacity: 0.5;
  transition: all 150ms ease-in-out;
}
.alert:hover {
  color: #E91E63;
  opacity: 1;
}

.card {
  max-width: 100%;
  margin: 1em auto 3em;
  border: 1px solid #d0cbca;
  background: #2196F3;
  transition: all 150ms ease-in-out;
}
.card:hover {
  background: #0960a5;
  border-color: #0960a5;
  box-shadow: 0 1px 40px rgba(0, 0, 0, 0.15);
}
.card header {
  text-align: center;
  padding: 1em;
  transition: all 150ms ease-in-out;
}
.card header h1, .card header h2, .card header h3 {
  color: white;
  margin: 0;
  line-height: 1.25;
}
.card header h2 {
  margin-bottom: 1em;
}
.card header img.avatar {
  border-radius: 50%;
  height: auto;
  padding: 10px;
  max-width: 128px;
  transition: all 150ms ease-in-out;
  margin-bottom: -80px;
}
.card header img.avatar:hover {
  border-radius: 10%;
  padding: 10px;
}
.card header.header_hover {
  background: #0960a5;
}
.card header.header_hover img.avatar {
  background: #0960a5;
}
.card.card_hover {
  border-color: #0960a5;
}

article, footer {
  background: #fff;
  padding: 1em;
}

article + footer {
  padding-top: 0;
}

footer.closure {
  text-align: center;
  font-size: 12px;
  color: #868686;
}


	</style>
	<script>
		$(document).ready(function(){
		$(".preloader").delay(500).fadeOut();
		})
	</script>
	<!-- <link rel="stylesheet" type="text/css" href="../../assets/css/loading.css"> -->
</head>
<body>

<?php

$rows = $this->db->query("SELECT * FROM mtp where nim_ketua='".$this->session->username."'")->row_array();
// echo "Selamat datang : $rows[nama_ketua]";

echo '
	<div class="preloader">
	  <div class="loading">
	    <img src="../../assets/img/load.gif" width="80">
	    <p>Harap Tunggu</p>
	  </div>
	</div>

<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="../../assets/img/tittle_fix.png" style="max-width: 180px;"></a>

      <ul class="right hide-on-med-and-down">
        <li><a href="../../index.php" class="active">HOME</a></li>
        <li><a href="../../index.php/mtp/tampil">MTP</a></li>
        <li><a href="../../index.php/login/logout">LOGOUT</a></li>
      </ul>

      <ul id="ea" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">MTP</a></li>
        <li><a href="#">MTP</a></li>
        <li><a href="#">LOGIN</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="section">
      <div class="row">
          <div class="col s12">
          <div class="section no-pad-bot" id="index-banner">
              <div class="jumbotron jumbotron-fluid">

              <video autoplay muted loop poster="assets/img/poster_kampus4.png">    
                  <source src="" data-src="../../assets/video/kampus4.mp4" type="video/mp4">
              </video>

              <div class="container text-white">

                <h1 class="display-4">TEKNIK INFORMATIKA</h1>
                <p class="lead">Web ini merupakan website pendaftaran manajemen tugas project</p>
                <a class="btn btn-primary btn-lg" href="../../index.php/mtp/tambahdata" role="button">Daftar Sekarang</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col s6">
          <div class="card">
          <header>
            <h2>Nama : '.$rows["nama_ketua"].'</h2>
            <h2>Nim : '.$rows["nim_ketua"].'</h2>
          </header>
          <footer>
            <h3>KELOMPOK MTP : '.$rows["nama_tim"].'</h3>
            <p>-  '.$rows["anggota_1"].'</p>
            <p>-  '.$rows["anggota_2"].'</p>
            <p>-  '.$rows["anggota_3"].'</p>
            <p>-  '.$rows["anggota_4"].'</p>
            <p>-  '.$rows["anggota_5"].'</p>
            <p>-  '.$rows["anggota_6"].'</p>
            <p>-  '.$rows["anggota_7"].'</p>
            <a href="#">Lihat selengkapnya...</a>
            <hr>
            <p class="cf">
              <small>
              <a class="align-left share" href="#"><i class="fa fa-fw fa-share"></i> share</a>
              <a href="#" class="align-right alert">report <i class="fa fa-fw fa-exclamation"></i></a>
              </small>
            </p>
          </footer>
        </div> <!--end card-->
        </div>
    <div class="col s12">
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
  </footer>';
?>

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