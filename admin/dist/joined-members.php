<?php include 'header.php';
include 'sidenav.php';
?>
<div style="background-color: pink; width=100%; height: 16.05%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">Class Payments</h3>
</div>
<!-- Php code For data View -->
<?php
include'database.php';
$query="SELECT * FROM apply_class";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>
<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                 <th>Sr.No</th>
                                                 <th>Name </th>
                                                 <th>Email</th>
                                                 <th>Phone</th>
                                                 <th>Class</th>
                                                 <th>Payment</th>
                                                 <th>Set Date</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <?php
                                  for ($k=1; $k<=$number ; $k++) { 
                                   $rs=mysqli_fetch_array($result);
                                   ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo $k;?></td>
                                                <td><?php echo $rs['name'];?></td>
                                                <td><?php echo $rs['email'];?></td>
                                                <td><?php echo $rs['cell'];?></td>
                                                <td><?php echo $rs['class'];?></td>
                                                <td><?php echo $rs['payment'];?></td>
                                                 <td>
                                                    <button class="btn btn-success"><a style="color: #fff; text-decoration: none;" href="not-pay.php?id=<?php echo $rs['id'];?>">Add Date</a></button>
                                                
                                            </tr>
                                               <?php
}
?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!-- <?php
$sel= "SELECT * FROM contact";
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

 <?php include 'footer.php';
?>


