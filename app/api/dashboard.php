<?php
include '../../database/dbconnection.php';
include '../../database/DBQueryHelper.php';
include '../../public/user/helper/helper.php';

Helper::isNotLogin('../../public/user/userlogin.php');

$id = $_SESSION['id'];

$sql = "SELECT * from contacts where user_id = '$id'";
// $email_sql = "SELECT email.email from contacts where user_id = '$id' INNER JOIN email where contacts.id = email.contact_id";
$number_of_auth_user_contact = DBQueryHelper::countResults($sql);
// mysqli_query($conn,$email_sql);
// var_dump(mysqli_error($conn));
header('Content-type: text/javascript');
echo  json_encode(['total_contact'=> $number_of_auth_user_contact]);
