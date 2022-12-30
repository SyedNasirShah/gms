<?php
session_start();
include "admin/dist/database.php";

$username=$_SESSION['fname'];

$userprofile=$_SESSION['email'];
if($userprofile==true)
{

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hire Trainer</title>
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

  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs projects" data-aos="fade-in">
      <div class="container">
        <h2 style="color: #fff;">Personal Trainer</h2>
        <p>Exercise is king. Nutrition is queen. Put them together and you have got a kingdom</p>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Events Section ======= -->
 <div class="container">
  <div style="text-align: center;">
  <h5 style="margin-top: 30px;">
Submit Your fee by JazzCash, EasyPaisa and Bank Transfer and fill the registration form below;</h5>
<p style="color: black; font-size: 20px; font-weight: 400;margin-left: -0px;">JazzCash : 03155085348&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; EasyPaisa : 03155085348&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bank Transfer : 0xxxxxxxxxxxxx</p>
<h5 style="margin-top: 30px;">
Please Attach Receipt of Payment while submitting the form.</h5><br>
</div>
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
   <h1 style="margin-top: 20px;">Hire Now Personal Trainer</h1>
               <form action="personal-trainer-data.php" method="POST" enctype="multipart/form-data">
              <div class="mail_section">
                <input type="text" class="mail_text" placeholder="Name" name="name" value="<?php echo "$username"  ?>" readonly>  
                <input type="email" class="mail_text" placeholder="Email" name="email" value="<?php echo "$userprofile"  ?>" readonly> 
                <input type="number" class="mail_text" placeholder="Phone Number" name="cell" required>
                <input type="file" id="files" name="image" class="mail_text" required/>
                <label for="files">Attach Payment SnapShot</label>
                <?php
                $query="SELECT * FROM team";
                $ongo= mysqli_query($links,$query);
                ?>
                <select name="cars" id="cars" class="mail_text">
                  <?php
                while ($row = mysqli_fetch_array($ongo)) {
                ?>
                <option value="<?php echo $row["name"] ?>"><?php echo $row["name"] ?></option>
                <?php
              }
                ?>
                </select>
               
                <div class="send_bt">
                    <input type="submit" name="upload" value="Apply Now" class="btn btn-info" style="border-radius: 5px; padding: 10px;">
                </div>
               </div>
             </form>
            </div>
 </div>
</div>
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
<?php
}
else{
header('location:login.php');

}
?>