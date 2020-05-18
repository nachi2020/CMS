<?php

include_once '../database/dbconnection.php';

#user_id = $_POST['id'];
#$first = $_POST['firstname'];
#$last = $_POST['lastname'];
#$mail = $_POST['email'];
#$pwd = $_POST['password'];
#$role = $_POST['role_id'];

$sql = "DELETE FROM users WHERE id=";
$result = mysqli_query($conn,$sql);

if ($result) {
	# code...
	header('location: ../public/adminDashboard.php');
}

?>
