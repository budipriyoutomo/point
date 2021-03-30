<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Point App</title>
  <link href="sandbox.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url();?>temp/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>temp/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>temp/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url();?>temp/dist/css/animsition.min.css">
</head>
<style>

body {
  width: 100%;
  height: 500px;
  background-color: lightblue;
  background-image:  url("<?=base_url();?>image/bg-patern.png");
  background-size: contain;
  background-repeat: repeat-x;
  position: relative;
}

.header-image {
  width: 560px;
  height: 120px;
  background-image: url("<?=base_url();?>image/header1.png");
  background-repeat: no-repeat;
  background-position: left top;
  color: lightblue;
  position: relative;
  
}
.button-staff{
  padding:100px;
  background-image: url("<?=base_url();?>image/staff.png") center ;
  background-size:200px;
  background-repeat: no-repeat;
  position: relative;
}

.button-admin{
  padding:100px;
  background-image: url("<?=base_url();?>image/admin.png");
  background-size:200px;
  background-repeat: no-repeat;
  position: relative;

}

img {
  position : center ; 
  border-radius: 50%;
  max-width: 100%;
  height:auto;
}

img:hover {
  box-shadow: 0 0 2px 4px rgba(0, 140, 186, 0.5);
}

</style>

<body >

<div class="header-image">
</div>
<div class="patern-image"> 
  <div class="animsition" style="padding: 150px 0; text-align: center;">
      <a href="<?php echo base_url() ?>auth/index/1.html" >
          <img src="<?=base_url();?>image/staff.png"  style="width:250px"> 
          <span>Button link 1</span>
      </a>
      <a href="<?php echo base_url() ?>auth/index/2.html" >
          <img src="<?=base_url();?>image/admin.png"  style="width:250px"> 
      </a>
  </div>

  </div>
  
  <script src="<?=base_url();?>temp/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?=base_url();?>temp/bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url();?>temp/dist/js/app.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script src="<?=base_url();?>temp/dist/js/animsition.min.js" charset="utf-8"></script>
  <script>
  $(document).ready(function() {
    $('.animsition').animsition();
  });
  </script>


</body>
</html>
