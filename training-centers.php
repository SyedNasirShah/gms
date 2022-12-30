    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
         <?php
   $sel= "SELECT * FROM training";
    $ongo= mysqli_query($links,$sel);

    while ($row = mysqli_fetch_array($ongo)) {
  ?>
  
          <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
            <a href="#">
            <div class="card" style="margin-top: 50px;">
              <div class="card-img">
                <img src="admin/dist/training-center/<?php echo $row['image'];?>">
              </div>
              <div class="card-body">
                <p class="card-text train-cent" style="margin-top:10px;text-align: center; font-size: 18px;font-weight: bold;"><?php echo $row['title'];?></p>
                <p class="card-text train-cent" style="margin-top:10px;text-align: center; font-size: 15px;font-weight: italic;">Cell Number : <?php echo $row['cell'];?></p>
                <p class="card-text train-cent" style="margin-top:10px;text-align: center; font-size: 15px;font-weight: italic;">Location : <?php echo $row['address'];?></p>
                
              </div>
            </div>
          </a>
          </div>
          <?php 
 
  }
  
?>
</div>
</div>
</section>