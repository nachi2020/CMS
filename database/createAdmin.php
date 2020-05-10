<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$first = "Nasra";
$last = "Rashid";
$mail = "nachirashid@gmail.com";
$pwd = "hey123";
$role = 1;
$emailVerifiedAt = NULL;
$createdAt = NULL;

$sql = "INSERT INTO users('f_name', 'l_name', 'email', 'password', 'role_id', 'email_verified_at', 'created_at') VALUES('$first', '$last', '$mail', SHA('$pwd'), '$role', '$emailVerifiedAt', '$createdAt')";
$result = mysqli_query($conn,$sql);

?>
?>
</body>
</html>