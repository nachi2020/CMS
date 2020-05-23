<?php
session_start();
include_once '../database/dbconnection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where email = '$email' AND password = SHA('$password') AND role_id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)==1) {
    $user = mysqli_fetch_array($result);
    $_SESSION['id'] = $user['id'];
	$_SESSION['name'] = $user['f_name']." ".$user['l_name'];
	$_SESSION['email'] = $user['email'];
header("location: ../public/adminDashboard.php");

}
else{

header("location: ../public/adminlogin.php");

}

?>

