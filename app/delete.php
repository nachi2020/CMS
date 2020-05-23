<?php


session_start();
if(empty($_SESSION))
  header("location: adminlogin.php");


include_once '../database/dbconnection.php';

$user_id = $_GET['id'];


$sql = "DELETE FROM users WHERE id=$user_id";
$result = mysqli_query($conn,$sql);

if ($result) {
	# code...
	header('location: ../public/adminDashboard.php');
}

?>
