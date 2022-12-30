<?php 
session_start();
include 'header.php';
include 'sidenav.php';
include 'database.php';

$user= $_SESSION['email'];
$query="SELECT * FROM personal_trainer where email='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>

<div style="width=100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">Trainer Payments</h3>
</div>

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>User Name</th>
                                                 <th>User Email</th>
                                                 <th>Trainer </th>
                                                 <th>Payment Status </th>
                                                 <th>Date </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo $rs['name'];?></td>
                                                <td><?php echo $rs['email'];?></td>
                                                <td><?php echo $rs['trainer'];?></td>
                                                <td><?php echo $rs['payment'];?></td>
                                                <td><?php echo $rs['datee'];?></td>
                                            </tr>
                                               <?php
}
?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!-- <?php
$sel= "SELECT * FROM images";
  $q= mysqli_query($links,$sel);

  echo "<table>";

  while ($row = mysqli_fetch_array($q)) {
echo "<tr>";
echo "<td>"; ?> <img src="<?php echo $row['image']; ?>" height="300"; width="300"> <?php echo "</td>";


echo "<tr>";


    // echo "<div id='img_div>";
    // echo "<img src='images/" .$row['image']."'>";
    // echo "<div>";
    
  }
  echo "</table>"
  
?>
 -->

 

