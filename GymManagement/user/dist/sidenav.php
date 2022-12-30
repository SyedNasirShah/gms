<?php 
session_start();
include'database.php';
$user= $_SESSION['email'];

$query="SELECT * FROM users where email='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);



$userprofile=$_SESSION['email'];

if($userprofile==true)
{

?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading my-colo">Core</div>
                            <a class="nav-link" href="gallery.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <B>
                                <?php 
                                $rs=mysqli_fetch_array($result);
                                echo $rs['fname'];
                                echo str_repeat('&nbsp;', 1);
                                ?>
                                </B>
                            <a class="nav-link" href="../../../index.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                                Home
                            </a>
                            </a>
                            <div class="sb-sidenav-menu-heading my-colo">Addons</div>
                            <a class="nav-link" href="gallery.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                My Classes
                            </a>
                           
                            <a class="nav-link" href="user-attend.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Attendence
                            </a>
                             <a class="nav-link" href="payment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Trainer Payment
                            </a>
                              <a class="nav-link" href="classpayment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Class Payment  
                            </a>
                            <a class="nav-link" href="my-cart.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                My Cart  
                            </a>
                            <a class="nav-link" href="My-Order.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                My Order
                            </a>
                            
                          
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>



                                                            <?php
}
else{
header('location:index.php');

}
?>