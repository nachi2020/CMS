
<?php
include "dbconnection.php";
$first = "Nasra";
$last = "Rashid";
$mail = "nachirashid@gmail.com";
$pwd = "hey123";
$role = 1;

$sql = "INSERT INTO users(`f_name`, `l_name`, `email`, `password`, `role_id`, `email_verified_at`, `created_at`) VALUES('$first', '$last', '$mail', SHA('$pwd'), '$role', NOW(), NOW())";
$result = mysqli_query($conn,$sql);


?>
