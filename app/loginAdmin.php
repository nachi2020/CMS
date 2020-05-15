<?php
include ("../database/dbconnection.php");

$Email = $_POST['email'];
$Password = $_POST['password'];

$sql = "SELECT * FROM users where email = $Email AND password = SHA('$Password')";
$result = mysqli_query($conn, $sql);

$row =  mysql_fetch_array($result);
if ($row['email']==$Email && $row['password']==$Password) {
	# code...

header("location: ../public/adminDashboard.php");

}
else{

header("location: ../public/loginAdmin.php");

}

?>

