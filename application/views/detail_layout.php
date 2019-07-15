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

  <style type="text/css">
  	.card {
	  background: #fff;
	  border-radius: 1px;
	  display: inline-block;
	  height: relative;
	  position: relative;
	  top: 20px;
	  bottom: 10px;
	  left: 0;
	  width:100%;
	  padding-top: 35px;
	  padding-bottom: 15px;
	  margin-left: 15px;
	  margin-right: 15px;
	}
	.card-2 {
  		box-shadow: 0 2px 3px rgba(0,0,0,0.16), 0 2px 3px rgba(0,0,0,0.16);
	}

  </style>

</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="../assets/img/tittle_fix.png" style="max-width: 180px; padding-top: 5px; "></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../">HOME</a></li>
        <li><a href="#"class="active">MTP</a></li>
        <li><a href="login.php">LOGIN</a></li>
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
    <div class="col s6 m6">
    	<div class="card card-2">
    		<div class="s6">
    		  <h2>DETAIL ANGGOTA KELOMPOK MTP</h2>
    		  Nama Kelompok : Eudev
          Nama Ketua    : Andri
          Jenis MTP     : Mandiri
          Anggota 1     : 
          Anggota 2     : 
          Anggota 3     : 
          Anggota 4     : 
          Anggota 5     : 
          Anggota 6     : 
          Anggota 7     :
          NAMA PROYEK   : 
          KONTAK WA     : 
          PEMBIMBING    :  
        </div>
    	</div>
    </div>
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
