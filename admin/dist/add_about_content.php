<?php  $page='index';
  include ('include/header.php');

?>

  <!-- User form start from here -->
  <div class="form-body">
    <form action="add-about-content-record.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Add Content</h1>
      <div class="form-group row">
        
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Enter Content</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="content" class="form-control input-lg" id="colFormLabel" placeholder="Enter Content">
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <input type="submit" name="upload" class="btn btn-primary" value="Add">
        </div>
      </div>
    </form>
  </div>
  <!--Form End here -->
</body>

</html>