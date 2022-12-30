<?php
session_start();
include 'database.php';


$userprofile=$_SESSION['username'];

if($userprofile==true)
{

?>

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="../../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <b>Website Home</b>
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="members.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                                 Members
                            </a>
                            <a class="nav-link" href="classes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Classes
                            </a>
                            <a class="nav-link" href="trainer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Trainers
                            </a>
                            <a class="nav-link" href="gallery.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                Gallery
                            </a>
                            <a class="nav-link" href="store.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Store
                            </a>
                            <a class="nav-link" href="training.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Training Center
                            </a>
                            <a class="nav-link" href="class-payment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Class Payments
                            </a>
                            <a class="nav-link" href="payments.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="messages.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Messages
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