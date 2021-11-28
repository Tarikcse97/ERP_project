<?php 
include('header.php');
?>
    <!-- Main content -->
    <section class="content">
    	<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Designation</th>
      <th scope="col">Phone</th>
      <th scope="col">Blood group</th>
    </tr>
  </thead>
  <tbody>

  	<?php
  	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tns";
  	$conn = mysqli_connect($servername, $username, $password, $dbname);
  	$sql = "select * from employee where department = 2";
  	$result = mysqli_query($conn, $sql);
  	
  	while ($row = mysqli_fetch_array($result)) {
  		echo "<tr>";
  		echo "<td>".$row['name']."</td>";
  		echo "<td>".$row['address']."</td>";
  		echo "<td>".$row['email']."</td>";
  		echo "<td>".$row['designation']."</td>";
  		echo "<td>".$row['phone']."</td>";
  		echo "<td>".$row['blood_group']."</td>";
  		echo"</tr>";
  	}
  	
  	?>
   
  </tbody>
</table>
    </section>
    <!-- /.content -->

<?
include('footer.php');
?>