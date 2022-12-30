<?php include 'header.php';
include 'sidenav.php';
?>

<div style="width= 100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">Trainers</h3>
</div>

<div class="container-fluid">
<button class="btn btn-success" style="margin-top:5px;margin-bottom: 5px;"><a style="color: #fff;  text-decoration: none;" href="add_trainers.php">Add Trainers</a></button>
</div>

<!-- Php code For data View -->
<?php
include'database.php';
$query="SELECT*FROM team";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>Sr.No</th>
                                                <th hidden>id</th>
                                                 <th>Name</th>
                                                 <th>Image</th>
                                                 <th>$/month</th>
                                                 <th>Description</th>
                                                 <th>Username</th>
                                                 <th>Password</th>
                                                <th colspan="2">Operation</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo $k;?></td>
                                                <td hidden><?php echo $rs['id'];?></td>
                                                <td><?php echo $rs['name'];?></td>
                                                <td>
                                                <div class="col-md-3" style="max-width: 90%;!important;">
                                                <a href="../../admin/dist/trainer/<?php echo $rs['image'];?>" target="_blank"><p>View Image</p></a>
                                                </div>    
                                                </td>
                                                <td><?php echo $rs['charges'];?></td>
                                                <td><?php echo $rs['dsp'];?></td>
                                                <td><?php echo $rs['username'];?></td>
                                                <td><?php echo $rs['pass'];?></td>
                                                <td><button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="update-trainer.php?id=<?php echo $rs['id'];?>">update</a></button></td>
                                                <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-team.php?id=<?php echo $rs['id'];?>">Delete</a></button></td>
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



