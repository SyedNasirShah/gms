<?php
session_start();
include 'header.php';
include 'sidenav.php';
include 'database.php';

$user= $_SESSION['email'];
$query="SELECT * FROM purchase_product where email='$user'";
$result=mysqli_query($links,$query);
$number=mysqli_num_rows($result);
?>


<div style="width=100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">My Orders</h3>
</div>

<!-- Php code end -->

 <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                                 <th>Sr.No</th>
                                                 <th>Name </th>
                                                 <th>Phone</th>
                                                 <th>Address</th>
                                                 <th>Card Type</th>
                                                 <th>Quantity</th>
                                                 <th>Product</th>
                                                 <th>Payment</th>
                                                 <th>Details</th>
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
                                                <td><?php echo $rs['phone'];?></td>
                                                <td><?php echo $rs['address'];?></td>
                                                <td><?php echo $rs['card_type'];?></td>
                                                <td><?php echo $rs['quan'];?></td>
                                                <td><?php echo $rs['product'];?></td>
                                                <td><?php echo $rs['payment'];?></td>
                                                <td><?php echo $rs['details'];?></td>
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


