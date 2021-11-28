<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tns";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
	LOGIN
*/

	$name = $_POST['username'];
	$password = $_POST['password'];
	$department = $_POST['department'];




$check = "SELECT * FROM login WHERE name='$name' AND password='$password' AND department='$department'";

if (mysqli_query($conn, $check)) {
   session_start();
    $_SESSION["login"] = "OK";
	$_SESSION['name']= $name; 
	$redirect = "index.php";
	print('success');
	session_start(); 

// store session data
$_SESSION["username"] = "nikita";
$_SESSION["email"] = "nikita@example.com";
	
} else {
    echo "Error: " . $check . "<br>" . mysqli_error($conn);
  
}
if($department == 0){
	header("Location: home.php");
}else{
	header("Location: employee.php");
}
