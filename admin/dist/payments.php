
<!-- Header start -->
<?php include 'header.php';?>
<!-- Header end  -->
<!-- sidenav start -->
    <?php include 'sidenav.php';?>

<!-- Php code For data View -->
<div style="width=100%; margin-left: 20px; margin-right: 20px;">
<h3 style="margin-left: 41%; margin-top: 5px; padding-top: 5px;">Store Payments</h3>
</div>
<?php
include'database.php';
$query="SELECT * FROM purchase_product";
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
                                                 <th>Address</th>
                                                 <th>Card Type</th>
                                                 <th>Quantity</th>
                                                 <th>Product</th>
                                                 <th>Receipt</th>
                                                 <th>Payment</th>
                                                 <th hidden>Status</th>
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
                                                <td><?php echo $rs['phone'];?></td>
                                                <td><?php echo $rs['address'];?></td>
                                                <td><?php echo $rs['card_type'];?></td>
                                                <td><?php echo $rs['quan'];?></td>
                                                <td><?php echo $rs['product'];?></td>
                                                <td><a href="../../product-pay/<?php echo $rs['image'];?>" target="_blank"><p>View Slip</p></a></td>
                                                <td>
                                                    <button class="btn btn-primary" name="clicked"><a style="color: #fff; text-decoration: none;" href="pay1.php?id=<?php echo $rs['id'];?>">Received?</a></button>
                                                    <button class="btn btn-danger"><a style="color: #fff; text-decoration: none;" href="pending1.php?id=<?php echo $rs['id'];?>">Pending!</a></button>
                                                </td>
                                                <td hidden>
                                                    <button class="btn btn-success"><a style="color: #fff; text-decoration: none;" href="not-pay1.php?id=
                                                    <?php echo $rs['id'];?>">Ready?</a></button>
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


