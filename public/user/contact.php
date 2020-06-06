<?php
include 'helper/helper.php';
Helper::isNotLogin();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../resources/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <? include_once 'layout/nav_bar.php'; ?>
  <div class="col-md-4 offset-md-4 login" style="margin-top: 100px;">

  <form action="../../app/add_contact.php"  method="POST" autocomplete="off" enctype="multipart/form-data">
    <div class="form-group">
      <label>Firstname:</label>
    <input type="text" name="f_name" class="form-control" autocomplete="off"><br>
    </div>

      <div class="form-group">
      <label>Lastname:</label>
    <input type="text" name="l_name" class="form-control" autocomplete="off"><br>
    </div>

      <div class="form-group">
      <label>Email:</label>
    <input type="text" name="email" class="form-control" autocomplete="off"><br>
    </div>

    <div class="form-group">
    <label>Phone Number:</label>
    <input type="text" name="phone_number" class="form-control" autocomplete="off"><br>
    </div>

    <div class="form-group">
    <label>Image:</label>
    <br>
    <input type="file" name="image"  autocomplete="off"><br>
    </div>

    <div class="container">
    <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Contact</button>
    </div>
  </form>
  </div>
  </body>
</html>
