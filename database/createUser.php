
<?php

include "dbconnection.php";

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$mail = $_POST['email'];
$pwd = $_POST['password'];
$role = 2;

$sql = "INSERT INTO users(`f_name`, `l_name`, `email`, `password`, `role_id`, `email_verified_at`, `created_at`) VALUES('$first', '$last', '$mail', SHA('$pwd'), '$role', NOW(), NOW())";
$result = mysqli_query($conn,$sql);

?>
