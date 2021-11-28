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
$email1 = $_POST['email'];
$phone1 = $_POST['phone'];
$salary1 = $_POST['salary'];
$id = $_POST['id'];


$sql = "UPDATE employee SET name = '$name1', address = '$address1', email = '$email1', phone ='$phone1', salary = '$salary1' where id = '$id'";

$v = mysqli_query($conn, $sql);
header("Location: sales.php");

?>