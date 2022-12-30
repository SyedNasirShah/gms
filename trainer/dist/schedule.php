<?php 
include 'header.php';
include 'sidenav.php';
include 'database.php';
$query="SELECT * FROM class_schedule";

$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>

<!-- Php code end -->
<div style="width=100%; margin-left: 20px; margin-right: 20px; margin-top: 53.5px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">Schedule</h3>
</div>
<div class="container-fluid"> 
<button class="btn btn-success"><a style="color: #fff;  text-decoration: none;" href="schedule-rec.php">Update Schedule</a></button>
</div>
 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="80%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Mon</th>
                                                <th>Tue</th>
                                                <th>Wed</th>
                                                <th>Thu</th>
                                                <th>Fri</th>
                                                <th>Sat</th>
                                                <th>Sun</th>
                                            </tr>

                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr style="text-align: center;">
                                               
                                                <td><?php echo $rs['mon'];?></td>
                                                <td><?php echo $rs['tue'];?></td>
                                                <td><?php echo $rs['wed'];?></td>
                                                <td><?php echo $rs['thu'];?></td>
                                                <td><?php echo $rs['fri'];?></td>
                                                <td><?php echo $rs['sat'];?></td>
                                                <td><?php echo $rs['sun'];?></td>
                                            </tr>
                                               <?php
}
?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>