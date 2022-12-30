<?php  $page='index';
  include ('include/header.php');

?>

  <!-- User form start from here -->
  <div class="form-body">
    <form action="add-contact-record.php" method="POST">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Add Contact</h1>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Phone</label>
        <div class="col-sm-9 m-auto">
          <input type="phone" name="phone" class="form-control" id="colFormLabel">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Address</label>
        <div class="col-sm-9 m-auto">
          <input type="text" name="address" class="form-control" id="colFormLabel">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label lab">Email</label>
        <div class="col-sm-9 m-auto">
          <input type="email" name="email" class="form-control" id="colFormLabel">
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <input type="submit" name="upload" class="btn btn-primary" value="Submit">
        </div>
      </div>
    </form>
  </div>
  <!--Form End here -->
</body>

</html>