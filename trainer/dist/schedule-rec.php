<?php  $page='index';
  include ('include/header.php');

?>

  <!-- User form start from here -->
  <div class="form-body">
    <form action="add-schedule-rec.php" method="POST" enctype="multipart/form-data">
      <h1 id="form-heading" style="color: green;margin-bottom: 40px;">Class Schedule</h1>
      <div class="form-group row">
        
 <label for="monday">Monday</label>
 <select name="monday" id="cars" class="form-control">
  <option value="-- --">-- --</option>
  <option value="8:00 AM-10:00 AM">8:00 AM-10:00 AM</option>
  <option value="10:00 AM-12:00 PM">10:00 AM-12:00 PM</option>
  <option value="12:00 PM-02:00 PM">12:00 PM-02:00 PM</option>
   <option value="02:00 PM-04:00 PM">02:00 PM-04:00 PM</option>
    <option value="04:00 PM-06:00 PM">04:00 PM-06:00 PM</option>
                </select>
                <label for="tuesday">Tuesday</label>
 <select name="tuesday" id="cars" class="form-control">
  <option value="-- --">-- --</option>
  <option value="8:00 AM-10:00 AM">8:00 AM-10:00 AM</option>
  <option value="10:00 AM-12:00 PM">10:00 AM-12:00 PM</option>
  <option value="12:00 PM-02:00 PM">12:00 PM-02:00 PM</option>
   <option value="02:00 PM-04:00 PM">02:00 PM-04:00 PM</option>
    <option value="04:00 PM-06:00 PM">04:00 PM-06:00 PM</option>
                </select>

                 <label for="wednesday">Wednesday</label>
 <select name="wed" id="cars" class="form-control">
  <option value="-- --">-- --</option>
  <option value="8:00 AM-10:00 AM">8:00 AM-10:00 AM</option>
  <option value="10:00 AM-12:00 PM">10:00 AM-12:00 PM</option>
  <option value="12:00 PM-02:00 PM">12:00 PM-02:00 PM</option>
   <option value="02:00 PM-04:00 PM">02:00 PM-04:00 PM</option>
    <option value="04:00 PM-06:00 PM">04:00 PM-06:00 PM</option>
                </select>
                 <label for="Thursday">Thursday</label>
 <select name="thu" id="cars" class="form-control">
  <option value="-- --">-- --</option>
  <option value="8:00 AM-10:00 AM">8:00 AM-10:00 AM</option>
  <option value="10:00 AM-12:00 PM">10:00 AM-12:00 PM</option>
  <option value="12:00 PM-02:00 PM">12:00 PM-02:00 PM</option>
   <option value="02:00 PM-04:00 PM">02:00 PM-04:00 PM</option>
    <option value="04:00 PM-06:00 PM">04:00 PM-06:00 PM</option>
                </select>
                 <label for="Friday">Friday</label>
 <select name="fri" id="cars" class="form-control">
  <option value="-- --">-- --</option>
  <option value="8:00 AM-10:00 AM">8:00 AM-10:00 AM</option>
  <option value="10:00 AM-12:00 PM">10:00 AM-12:00 PM</option>
  <option value="12:00 PM-02:00 PM">12:00 PM-02:00 PM</option>
   <option value="02:00 PM-04:00 PM">02:00 PM-04:00 PM</option>
    <option value="04:00 PM-06:00 PM">04:00 PM-06:00 PM</option>
                </select>
                 <label for="Saturday">Saturday</label>
 <select name="sat" id="cars" class="form-control">
  <option value="-- --">-- --</option>
  <option value="8:00 AM-10:00 AM">8:00 AM-10:00 AM</option>
  <option value="10:00 AM-12:00 PM">10:00 AM-12:00 PM</option>
  <option value="12:00 PM-02:00 PM">12:00 PM-02:00 PM</option>
   <option value="02:00 PM-04:00 PM">02:00 PM-04:00 PM</option>
    <option value="04:00 PM-06:00 PM">04:00 PM-06:00 PM</option>
                </select>


       
      </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <input type="submit" name="upload" class="btn btn-primary" value="UPLOAD">
        </div>
      </div>
    </form>
  </div>
  <!--Form End here -->
</body>

</html>