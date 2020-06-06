<?php
session_start();
class Helper
{

  public static function isNotLogin($page ='userlogin.php')
  {
    if(empty($_SESSION))
      header("location: $page");
  }
  public static function isLogin($page ='userhome.php')
  {
    if(!empty($_SESSION))
      header("location: $page");
  }

}
?>
