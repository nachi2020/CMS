<?php
$user = 'root';
$pass = '';
$db = 'cms';
$conn = mysqli_connect('localhost', $user, $pass, $db)or die("Unable to connect");
echo "hi!!!";
//mysqli_close($conn);
?>