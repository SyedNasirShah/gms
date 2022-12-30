<?php 
session_start();
include 'header.php';
include 'sidenav.php';
include 'database.php';

$user= $_SESSION['fname'];
$query="SELECT * FROM attendence where name='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>

<div style="width=100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">My Attendance</h3>
</div>
 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                
                                                 <th>Name</th>
                                                 <th>Time </th>
                                                 <th>Status</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr style="text-align: center;"r>
                                                
                                                <td><?php echo $rs['name'];?></td>
                                                <td><?php echo $rs['datee'];?></td>
                                                <td><?php echo $rs['status'];?></td>
                                               <!-- <td><button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="update-store.php?id=<?php echo $rs['id'];?>">update</a></button></td>
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-ongoing.php?id=<?php echo $rs['id'];?>">Delete</a></button></td> -->
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




