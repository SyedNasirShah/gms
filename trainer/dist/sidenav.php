<?php
session_start();
include 'database.php';


$userprofile=$_SESSION['name'];
$query="SELECT * FROM team where name='$userprofile'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);

if($userprofile==true)
{

?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading my-colo">Core</div>
                            <a class="nav-link" href="my-members.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <B>
                                <?php 
                                $rs=mysqli_fetch_array($result);
                                echo $rs['name'];
                                echo str_repeat('&nbsp;', 1);
                                ?>
                                </B>
                            </a>
                            <a class="nav-link" href="../../../index.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                                Website Home
                            </a>
                            <div class="sb-sidenav-menu-heading my-colo">Addons</div>
                            <a class="nav-link" href="my-members.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                My Members
                            </a>
                           
                            <a class="nav-link" href="schedule.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                                Schedule
                            </a>
                            
                            
                            
                           <a class="nav-link" href="attendence2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                                 Attendence
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