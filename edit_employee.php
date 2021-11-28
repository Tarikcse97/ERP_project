<?php 
include('header.php');
?>
    <!-- Main content -->
    <section class="content">
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
  	<?php
    	$servername = "localhost";
  	  $username = "root";
  	  $password = "";
  	  $dbname = "tns";
    	$conn = mysqli_connect($servername, $username, $password, $dbname);
    	$sql = "select * from employee where id = '".$_GET['id']."'";
    	$result = mysqli_query($conn, $sql);
  	
  	while ($row = mysqli_fetch_array($result)) { ?>

        <form method="POST" action="employee_update.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" value="<?php echo $row['name']; ?>">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" name="address"  value="<?php echo $row['address']; ?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email"  value="<?php echo $row['email']; ?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone"  value="<?php echo $row['phone']; ?>">
          </div> 


          <div class="form-group">
            <label for="exampleInputPassword1">Salary</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Salary" name="salary"  value="<?php echo $row['salary']; ?>">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> 


       <?php  } ?>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

     </section>  





   
    </section>
    <!-- /.content -->

<?php
include('footer.php');
?>