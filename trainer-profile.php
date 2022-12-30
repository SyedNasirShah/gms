<link rel="stylesheet" href="trainer-profile.css">
<link rel="stylesheet" type="text/css" href="css/trainer-profile.css">

      <div class="pro-wrapper" id="myDIV">
        <?php
         $sel= "SELECT * FROM team";
         $team= mysqli_query($links,$sel);
         $row = mysqli_fetch_array($team);
         ?>
    <div class="left-le">
      <div class="">
        
        <img src="admin/dist/trainer/<?php echo $row['image'];?>" alt="user" width="100">
      </div>
      
        <h4><?php echo $row['name'];?></h4>
    </div>
    <div class="right-ri">
      <h2>Profile</h2>
        <div class="info">
            <div class="info_data">
                 <div class="data">
                    <h3>Education</h3>
                    
                    <p class="card-text" style="padding-top:30px; font-size: 16px;font-weight: bold;"><?php echo $row['name'];?></p>
                    
                 </div> 
            </div>
        </div>
      
 
        <div class="info">
            <div class="info_data">
                 <div class="data">
                    <h3>Experience</h3>
                   
                    <p class="card-text" style="padding-top:30px; font-size: 16px;font-weight: bold;"><?php echo $row['dsp'];?></p>
                     
                 </div> 
            </div>
        </div>
      
        <div class="social_media">
            <div class="i-icons">
              <a href="#" class="fab fa-facebook-f"></a>
            </div>
            <div class="i-icons">
              <a href="#" class="fab fa-twitter"></a>
            </div>
            <div class="i-icons">
              <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        <div class="btn-hr">
           <a href="#">Hire</a>
        </div>
 </div>
 </div>