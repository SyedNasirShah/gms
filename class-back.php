    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
         <?php
   $sel= "SELECT * FROM upcoming";
    $ongo= mysqli_query($links,$sel);
    while ($row = mysqli_fetch_array($ongo)) {
  ?>    

          <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="admin/dist/classes/<?php echo $row['image'];?>">
              </div>
              <div class="card-body">
                <p class="card-text" style="padding-top:30px; font-size: 22px;font-weight: bold; color: #4CAF50;"><?php echo $row['title'];?></p>
                <p style="float: left; color: #333; font-weight: 600; color: #4CAF50;"><?php echo $row['duration'];?></p>
                <p style="float: right; font-weight: 400; color: #4CAF50;"><?php echo "$"; echo $row['price'];?></p>
                <a href="apply-classes.php" style=" background-color: #4CAF50;border: none;color: white;padding: 15px 62px ;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin: -4px 14px;cursor: pointer;border-radius: 15px;">Book Now</a>
              </div>
            </div>
          </div>
          <?php 
 
  }
  
?>
</div>
</div>
</section>