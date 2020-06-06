<?php
session_start();
include '../database/dbconnection.php';
include_once '../database/DBQueryHelper.php';
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$user_id = $_SESSION['id'];

//contact sql
$contact_sql = "INSERT INTO contacts(`f_name`,`l_name`,`user_id`,`city_id`) VALUES('$f_name','$l_name','$user_id',1)";

if(DBQueryHelper::query($contact_sql))
{
  $contact_id = mysqli_insert_id($conn);

  //email sql

  $email_sql = "INSERT into email(`email`,`contact_id`) values('$email','$contact_id')";
  if(!DBQueryHelper::query($email_sql))
   die('error: Fail to insert email');
  //phonenumber sql

  $phone_number_sql = "INSERT into phone_numbers(`phone_number`,`contact_id`) values('$phone_number','$contact_id')";
  if(!DBQueryHelper::query($phone_number_sql))
   die('error: Fail to insert phonenumber');
  header('location: ../public/user/userhome.php');
}
echo "Error: fail to insert Contacts".DBQueryHelper::dbError();
