   <?php
    include 'admin/dist/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GMS | Store</title>
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

  ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs projects" data-aos="fade-in">
      <div class="container">
        <h2 style="color: #fff;">Store</h2>
        <p>The fitness world is full of a lot of gimmicks and promises because, working out is hard work, and if there’s one thing human history has shown us, it’s that humans love a good shortcut. The truth is, there’s no real replacement for good old-fashioned hard work. When it comes to fitness, “hard work” means getting into the gym, banging weights around, laying down miles, not eating trash, and making the effort to cut fat and make gains.Our granddaddies got their strength from eating good and lifting big, but you bet your ass if they had the science and technology we have today, they’d have explored the world of supplements, too.</p>
      </div>
    </div><!-- End Breadcrumbs -->




    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <?php
   $sel= "SELECT * FROM nav_img";
    $store= mysqli_query($links,$sel);

    while ($row = mysqli_fetch_array($store)) {
  ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            
            <div class="member">
              <img src="admin/dist/store/<?php echo $row['image'];?>" class="img-fluid" alt="">
              <div class="member-content">
               <h4 style="text-align: left;"><?php echo $row['title'];?></h4>
                <h4 style="text-align: right;"><?php echo $row['price'];?>$</h4>

                <form action="Add-to-cart.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $row['id'];?>" placeholder="id" required>
                  <input type="hidden" name="name" value="<?php echo $row['title'];?>" placeholder="Name" required>
                  <input type="hidden" name="img" value="<?php echo $row['image']?>" placeholder="Name" required>
                  <input type="number" name="quan" min="1" max="5" value="1" placeholder="Quantity" required>
                  <input type="hidden" name="price" value="<?php echo $row['price'];?>" placeholder="price" required>
                  <button type="submit" name="upload" style=" background-color: #4CAF50;border: none;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;margin: 4px 2px;cursor: pointer;border-radius: 15px;">Add To Cart</button>
                </form>
                <a href="purchase.php" style=" background-color: #4CAF50;border: none;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 15px;">Buy</a>
              </div>
            </div>
          </div>
             <?php 
 
  }
  
?>
        </div>

      </div>
    </section>

<?php
include "footer.php";
?>
  </main><!-- End #main -->

 

  <!-- <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a> -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>