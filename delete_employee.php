
  	<?php
  	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tns";
  	$conn = mysqli_connect($servername, $username, $password, $dbname);
  	$sql = "delete from employee where id = '".$_GET['id']."'";
  	$result = mysqli_query($conn, $sql);

  