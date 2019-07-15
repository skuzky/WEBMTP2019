<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
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

.no-margin{
  margin: 0;
}

.card-1 {
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  box-shadow: 0 2px 3px rgba(0,0,0,0.16), 0 2px 3px rgba(0,0,0,0.16);
}

/*.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}*/

.card-2 {
  box-shadow: 0 2px 3px rgba(0,0,0,0.16), 0 2px 3px rgba(0,0,0,0.16);
}

.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.card-4 {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
  </style>
</head>
<body>
  <?php

$rows = $this->db->query("SELECT * FROM mtp where nim_ketua='".$this->session->username."'")->row_array();
//echo "Selamat datang : $rows[nama_ketua]"; 

?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="../../assets/img/tittle_fix.png" style="max-width: 180px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../../index.php">HOME</a></li>
        <li><a href="../../index.php/mtp" class="active">MTP</a></li>
        <li><a href="../../index.php/login/logout">LOGOUT</li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">MTP</a></li>
        <li><a href="#">MTP</a></li>
        <li><a href="#"><i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </nav>

<?php
echo'
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <div class="card card-2">
            <div class="col s12">
            <center>
              <h1>FORM SEMINAR MTP</h1>
               <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="nama_tim"> Nama Tim</label><br>
                      <input placeholder="Nama tim" id="nama_tim" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="hari_tanggal"> Hari Tanggal Ujian</label><br>
                      <input placeholder="hari, tanggal" id="hari_tanggal" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="hari_tanggal">Tempat Ujian</label><br>
                      <input placeholder="ex. Ruang 302" id="hari_tanggal" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="judul">Judul MTP</label><br>
                      <input placeholder="judul mtp" id="judul" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="penguji">Dosen Penguji</label><br>
                      <input placeholder="tulis beserta gelar" id="penguji" type="text" class="validate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label for="email">Email Ketua</label><br>
                      <input id="email" type="email" placeholder="email" class="validate">
                    </div>
                  </div>
                  <div class="row">

                      <div class="col s6">
                                            <center>
                        <a class="btn btn-primary" href="tampil">Submit</a>
                      </center>
                      </div>
                  </div>
<!--                   <div class="row">
                    <div class="col s12">
                      This is an inline input field:
                      <div class="input-field inline">
                        <input id="email_inline" type="email" class="validate">
                        <label for="email_inline">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                      </div>
                    </div>
                  </div> -->
                </form>
              </div>
          </center>
          </div>
        </div>
       </div>
      </div>
    </div>
  </div>
';
  ?>
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

  </script>

  </body>
</html>
