<?php 
include('header.php');
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form method="POST" action="connection.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" name="address">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Department</label>
            <select class="custom-select" name="department">
              <option selected>Select Department</option>
              <option value="1">Sales</option>
              <option value="2">Marketing</option>
              <option value="3">HR</option>
              <option value="4">Engineering</option>
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Designation</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Designation" name="designation">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone">
          </div> 

          <div class="form-group">
            <label for="exampleInputEmail1">Blood group</label>
            <select class="custom-select" name="blood_group">
              <option selected>Select Blood Group</option>
              <option value="A+">A+</option>
              <option value="AB+">AB+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Salary</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Salary" name="salary">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

<?php
include('footer.php');
?>

