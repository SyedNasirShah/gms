   <?php
    include 'admin/dist/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GMS | Gallery</title>
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
    include 'header.php';

?>
  <div class="breadcrumbs projects aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 style="color: #fff;">Gallery</h2>
        <p>The fitness world is full of a lot of gimmicks and promises because, working out is hard work, and if there’s one thing human history has shown us, it’s that humans love a good shortcut.</p>
      </div>
    </div>

<div class="classes_section layout_padding">
      <div class="container">
        <h1 class="popular_text">See Our Pictures Gallery</h1>
        <div class="projects_section2">
          <div class="container_main2">
            <div class="row">
                 <?php
   $sel= "SELECT * FROM images";
    $imag= mysqli_query($links,$sel);

    while ($row = mysqli_fetch_array($imag)) {
  ?>
              <div class="col-sm-4 setgallery">
                <div class="container_main1">
                  <img src="admin/dist/gallery/<?php echo $row['image'];?>" alt="Avatar" class="image" style="width:100%">
                  <!-- <div class="middle">
                   
                  </div>  --> 
                </div>
              </div>
               <?php 
 
  }
  
?>
            </div>
          </div>
        </div>
      </div>
    </div>




     <?php
    include 'footer.php';

?>
    
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>