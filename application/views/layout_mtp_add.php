
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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="../../assets/img/tittle_fix.png" style="max-width: 180px; padding-top: 5px; "></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../../">HOME</a></li>
        <li><a href="#"  class="active">MTP</a></li>
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
    <h3>Pendaftaran Kelompok MTP 2019</h3>
	<?php echo validation_errors(); ?>
	<p>
	<?php 
	echo form_open('mtp/tambahdata');
	echo form_label('Jenis MTP','jenis_mtp').'<br>';
	echo form_input('jenis_mtp', set_value('jenis_mtp')).'<br>';
	echo form_label('Nama Tim','nama_tim').'<br>';
	echo form_input('nama_tim', set_value('nama_tim')).'<br>';
	echo form_label('Nama Ketua','nama_ketua').'<br>';
	echo form_input('nama_ketua', set_value('nama_ketua')).'<br>';
		
		echo form_label('Kontak WA','kontak_wa').'<br>';
	echo form_input('kontak_wa', set_value('kontak_wa')).'<br>';
		echo form_label('Anggota 1','anggota_1').'<br>';
	echo form_input('anggota_1', set_value('anggota_1')).'<br>';
		echo form_label('Anggota 2','anggota_2').'<br>';
	echo form_input('anggota_2', set_value('anggota_2')).'<br>';
		echo form_label('Anggota 3','anggota_3').'<br>';
	echo form_input('anggota_3', set_value('anggota_3')).'<br>';
		echo form_label('Anggota 4','anggota_4').'<br>';
	echo form_input('anggota_4', set_value('anggota_4')).'<br>';
		echo form_label('Anggota_5','anggota_5').'<br>';
	echo form_input('anggota_5', set_value('anggota_5')).'<br>';
		echo form_label('Anggota 6','anggota_6').'<br>';
	echo form_input('anggota_6', set_value('anggota_6')).'<br>';
		echo form_label('Anggota 7','anggota_7').'<br>';
	echo form_input('anggota_7', set_value('anggota_7')).'<br>';
		echo form_label('Proyek','proyek').'<br>';
	echo form_input('proyek', set_value('proyek')).'<br>';
		echo form_label('Pembimbing','pembimbing').'<br>';
	echo form_input('pembimbing', set_value('pembimbing')).'<br>';
	

	echo form_submit('mysubmit','Simpan'); 
	echo form_close();
	 ?>
	</p>
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