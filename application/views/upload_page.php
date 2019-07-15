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
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- js  -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

#one
{
  margin-top:50px;
 box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.2);
}
.it .btn-orange
{
  background-color: transparent;
  border-color: #777!important;
  color: #777;
  text-align: left;
  width:100%;
}
.it input.form-control
{
  height: 54px;
  border:none;
  margin-bottom:0px;
  border-radius: 0px;
  border-bottom: 1px solid #ddd;
  box-shadow: none;
}
.it .form-control:focus
{
  border-color: #ff4d0d;
  box-shadow: none;
  outline: none;
}
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.it .btn-new, .it .btn-next
{
  margin: 30px 0px;
  border-radius: 0px;
  background-color: #333;
  color: #f5f5f5;
  font-size: 16px;
  width: 155px;
}
.it .btn-next
{
  background-color: #ff4d0d;
  color: #fff;
}
.it .btn-check
{
  cursor:pointer;
  line-height:54px;
  color:red;
}
.it .uploadDoc
{
  margin-bottom: 20px;
}
.it .uploadDoc
{
  margin-bottom: 20px;
}
.it .btn-orange img {
    width: 30px;
}
p
{
  font-size:16px;
  text-align:center;
  margin:30px 0px;
}
.it #uploader .docErr
{
  position: absolute;
    right:auto;
    left: 10px;
    top: -56px;
    padding: 10px;
    font-size: 15px;
    background-color: #fff;
    color: red;
    box-shadow: 0px 0px 7px 2px rgba(0,0,0,0.2);
    display: none;
}
.it #uploader .docErr:after
{
  content: '\f0d7';
  display: inline-block;
  font-family: FontAwesome;
  font-size: 50px;
  color: #fff;
  position: absolute;
  left: 30px;
  bottom: -40px;
  text-shadow: 0px 3px 6px rgba(0,0,0,0.2);
}

  </style>
</head>
<body>
  <?php

$rows = $this->db->query("SELECT * FROM mtp where nim_ketua='".$this->session->username."'")->row_array();
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
              <div class="row">
                <div class="col-sm-offset-4 col-sm-4 form-group">
                  <h3 class="text-center">Upload Document</h3>
                </div><!--form-group-->
              </div><!--row-->
              <div id="uploader">
              <div class="row uploadDoc">
                <div class="col-sm-3">
                  <div class="docErr">Upload file berformat pdf</div><!--error-->
                  <div class="fileUpload btn btn-orange">
                    <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon" style="max-width: 20px;">
                    <span class="upl" id="upload">Upload document</span>
                    <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                  </div><!-- btn-orange -->
                </div><!-- col-3 -->
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="" placeholder="Keterangan">
                </div><!--col-8-->
                <div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div><!-- col-1 -->
              </div><!--row-->
              </div><!--uploader-->
              <div class="text-center">
              <a class="btn btn-primary btn-small btn-new" href="#"><i class="fa fa-plus"></i> Add new</a>
              <a class="btn btn-primary btn-small btn-check " href="tampil"><i class="fa fa-paper-plane"></i> Submit</a>
              </div>
              </div><!--one-->
              </div><!-- row -->
            </center>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
';
  ?>
  <br><br><br><br><br><br>
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
    var fileTypes = ['pdf', 'docx', 'rtf', 'jpg', 'jpeg', 'png', 'txt'];  //acceptable file types
function readURL(input) {
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
            isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types

        if (isSuccess) { //yes
            var reader = new FileReader();
            reader.onload = function (e) {
                if (extension == 'pdf'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/179/179483.svg');
                }
                else if (extension == 'docx'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/281/281760.svg');
                }
                else if (extension == 'rtf'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136539.svg');
                }
                else if (extension == 'png'){ $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136523.svg'); 
                }
                else if (extension == 'jpg' || extension == 'jpeg'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136524.svg');
                }
              else if (extension == 'txt'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136538.svg');
                }
                else {
                  //console.log('here=>'+$(input).closest('.uploadDoc').length);
                  $(input).closest('.uploadDoc').find(".docErr").slideUp('slow');
                }
            }

            reader.readAsDataURL(input.files[0]);
        }
        else {
            //console.log('here=>'+$(input).closest('.uploadDoc').find(".docErr").length);
            $(input).closest('.uploadDoc').find(".docErr").fadeIn();
            setTimeout(function() {
            $('.docErr').fadeOut('slow');
          }, 9000);
        }
    }
}
$(document).ready(function(){
   
   $(document).on('change','.up', function(){
    var id = $(this).attr('id'); /* gets the filepath and filename from the input */
     var profilePicValue = $(this).val();
     var fileNameStart = profilePicValue.lastIndexOf('\\'); /* finds the end of the filepath */
     profilePicValue = profilePicValue.substr(fileNameStart + 1).substring(0,20); /* isolates the filename */
     //var profilePicLabelText = $(".upl"); /* finds the label text */
     if (profilePicValue != '') {
      //console.log($(this).closest('.fileUpload').find('.upl').length);
        $(this).closest('.fileUpload').find('.upl').html(profilePicValue); /* changes the label text */
     }
   });

   $(".btn-new").on('click',function(){
        $("#uploader").append('<div class="row uploadDoc"><div class="col-sm-3"><div class="docErr">Please upload valid file</div><!--error--><div class="fileUpload btn btn-orange"> <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon" style="max-width: 20px;"><span class="upl" id="upload">Upload document</span><input type="file" class="upload up" id="up" onchange="readURL(this);" /></div></div><div class="col-sm-8"><input type="text" class="form-control" name="" placeholder="Keterangan"></div><div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div></div>');
   });
    
   $(document).on("click", "a.btn-check" , function() {
     if($(".uploadDoc").length>1){
        $(this).closest(".uploadDoc").remove();
      }else{
        alert("You have to upload at least one document.");
      } 
   });
});

  </script>

  </body>
</html>
