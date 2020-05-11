	<?php
session_start();
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="2px">

	<tr>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>ROLE</th>
	</tr>
	<tr>
		<td>nach</td>
		<td>hi@gmail.com</td>
		<td>admin</td>
	</tr>
	
</table>

<?php

$_SESSION['email'] = "nachirashid@gmail.com";
echo $_SESSION['email'];
if(isset($_SESSION['email'])){
echo "<br>You are logged in.";
} else{
	echo "You are not logged in";
}

?>
</body>
</html>