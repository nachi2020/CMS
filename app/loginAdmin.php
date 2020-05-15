<?php
include_once '../database/dbconnection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where email = $email AND password = SHA('$password')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)==1) {

header("location: ../public/adminDashboard.php");

}
else{

header("location: ../public/loginAdmin.php");

}

?>

