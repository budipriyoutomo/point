<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Point APP </title>
  <link rel="stylesheet" href="<?=base_url();?>assets/main/css/style.css">
</head>
<style>
.content-button  {  
  font-family: 'Source Sans Pro',Helvetica,sans-serif;
  color: #FFF;
  max-width: 340px;
  min-width: 230px;
  text-align: center;
  display: inline-block;
  font-size: 30px;
  letter-spacing: 1px;
  padding: 10px 10px;
  position:relative;
  text-transform: uppercase;
  
}
.header img{
  position: relative;
  border-radius: 30px;
}
body {
  background-image: url("<?=base_url();?>image/bg-patern.png");
  background-color: #212121;
  text-align: center;
}

</style>
<body>


<div class="header">
<img src="<?=base_url();?>image/header1.png"  />
</div>
<div class="body-content">
<div class="content-button">
  <figure class="snip1573">
  
  <img src="<?=base_url();?>image/admin.png"  />
  <figcaption>
    <h3>Admin</h3>
  </figcaption>
  <a href="<?php echo base_url() ?>auth/index/2.html" ></a>
  </figure>
  Admin
</div>
<div class="content-button">
  
  <figure class="snip1573">
  <img src="<?=base_url();?>image/staff.png" />
  <figcaption>
    <h3>Staff</h3>
  </figcaption>
  <a href="<?php echo base_url() ?>auth/index/1.html" ></a>
  
</figure>
Staff
</div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="<?=base_url();?>assets/main/js/index.js"></script>

</body>
</html>
