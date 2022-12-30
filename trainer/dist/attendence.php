<?php 
session_start();
?>
<?php 
include 'header.php';
include 'sidenav.php';
include'database.php';
$user= $_SESSION['name'];
$query="SELECT * FROM personal_trainer where trainer='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>          
                                                 <th>Name</th>
                                                   <th>Email</th>
                                                   
                                                 
                                                <th>Status </th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr>
                                                <td><?php echo $k;?></td>
                                                <td><?php echo $rs['name'];?></td>
                                                <td><?php echo $rs['email'];?></td>
                                              
                                            <td>
                                                <button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="not-pay.php?id=<?php echo $rs['id'];?>">Mark Today Attendence</a></button>
                                                <button class="btn btn-success"><a style="color: #fff; text-decoration: none;" href="present.php?id=<?php echo $rs['id'];?>">Present</a></button>
                                                <button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="absent.php?id=<?php echo $rs['id'];?>">Absent</a></button>
                                            </td>
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
 
