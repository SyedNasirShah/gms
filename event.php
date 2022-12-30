<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Projects</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons --><!-- 
  <link href="assets/img/oneskill2.png" rel="icon">
  <link href="assets/img/oneskill2.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Contact</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" type="image/x-icon" href="images/logo.svg">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- ======================================================= -->
</head>
<body>
<?php 
include "header.php";
include "admin/dist/database.php";
 ?>



<section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Events</h2>
          <p style="margin-bottom: 30px;">Upcoming Events</p>
        </div>
        <div class="row">
        <?php
   $sel= "SELECT * FROM upcoming";
    $ongo= mysqli_query($links,$sel);

    while ($row = mysqli_fetch_array($ongo)) {
  ?>

          <a href="events.php">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="admin/dist/<?php echo $row['image'];?>">
              </div>
              <div class="card-body">
              
               
                <p class="card-text" style="padding-top:30px; font-size: 16px;font-weight: bold;"><?php echo $row['title'];?></p>
              </div>
            </div>
          </div>
          </a>
        
<?php 
 
  }
  
?></div></div>
       
      
    </section>

<section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Events</h2>
          <p style="margin-bottom: 30px;">Past Events</p>
        </div>
        <div class="row">
        <?php
   $sel= "SELECT * FROM nav_img";
    $ongo= mysqli_query($links,$sel);

    while ($row = mysqli_fetch_array($ongo)) {
       $id = $row['id'];
  ?>

          <a href="events.php">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="admin/dist/<?php echo $row['image'];?>">
              </div>
              <div class="card-body">
              
               
                <p class="card-text" style="padding-top:30px; font-size: 16px;font-weight: bold;"><?php echo $row['title'];?></p>
              </div>
            </div>
          </div>
          </a>
        
<?php 
 
  }
  
?></div></div>
      
    </section>
<br><br>
<?php

include "footer.php"

?>

</body>
</html>

 