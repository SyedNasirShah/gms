<!-- Header start -->
<?php include 'header.php';?>
<!-- Header end  -->
<!-- sidenav start -->
    <?php include 'sidenav.php';?>
<!-- sidnav end -->
<!-- Search BAR CODE -->


<!-- Php code For data View -->
<?php
include'database.php';
$query="SELECT * FROM class_schedule";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="80%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
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
                                            <tr>
                                               
                                                <td><?php echo $rs['mon'];?></td>
                                                <td><?php echo $rs['tue'];?></td>
                                                <td><?php echo $rs['wed'];?></td>
                                                <td><?php echo $rs['thu'];?></td>
                                                  <td><?php echo $rs['fri'];?></td>
                                                    <td><?php echo $rs['sat'];?></td>
                                                    <td><?php echo $rs['sun'];?></td>
                                               <!-- <td><button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="update-store.php?id=<?php echo $rs['id'];?>">update</a></button></td> -->
                                              <!--   <td><button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="delete-ongoing.php?id=<?php echo $rs['id'];?>">Delete</a></button></td> -->
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

 


