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


$name1 = $_POST['name'];
$address1 = $_POST['address'];
$department1 = $_POST['department'];
$designation1 = $_POST['designation'];
$email1 = $_POST['email'];
$phone1 = $_POST['phone'];
 $blood_group1 = $_POST['blood_group'];
$joining_date1 = date('Y-d-d');
$salary1 = $_POST['salary'];



$sql = "INSERT INTO employee (name, address, department, designation, email, phone, blood_group, joining_date, salary)
	VALUES ('".$name1."', '".$address1."', '".$department1."', '".$designation1."', '".$email1."', '".$phone1."', '".$blood_group1."', '".$joining_date1."', '".$salary1."')";

$v = mysqli_query($conn, $sql);

?>