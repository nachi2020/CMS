<?php
session_start();
include_once '../database/dbconnection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$role = 2;


$sql = "SELECT * FROM users where email = '$email' AND password = SHA('$password') AND role_id = '$role'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)==1) {
$user = mysqli_fetch_array($result);
$_SESSION['id'] = $user['id'];
$_SESSION['role_id'] = $user['role_id'];
$_SESSION['name'] = $user['f_name']." ".$user['l_name'];
$_SESSION['email'] = $user['email'];

header("location: ../public/userhome.php");

}
else{

header("location: ../public/userlogin.php");

}

?>