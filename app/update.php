<?php

include_once '../database/dbconnection.php';

$id = $_POST['id'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$mail = $_POST['email'];
$pwd = $_POST['password'];
$role = $_POST['role_id'];

$sql = "UPDATE users SET `f_name`=$first, `l_name`=$last, `email`=$mail, `password`=$pwd `role_id`=$role WHERE id=$id"; 
$result = mysqli_query($conn,$sql);

if ($result) {
	# code...
	echo mysqli_error($conn);
	header('location: ../public/adminDashboard.php');
}

?>