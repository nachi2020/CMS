
<?php
//conection
include_once '../database/dbconnection.php';
$id = $_GET['id'];
$sql = "SELECT * from users where id = '$id' LIMIT 1"; 
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

  <div class="col-md-4 offset-md-4 login">
    <form action="update.php"  method="POST" autocomplete="off">
      <center><h1>EDIT USER</h1></center>

<input type="hidden" name="id">

  <div class="form-group">
    <label>Firstname:</label>
  <input type="text" name="firstname" class="form-control" autocomplete="off" value="<?=$users['f_name']?>"><br>
  </div>

    <div class="form-group">
    <label>Lastname:</label>
  <input type="text" name="lastname" class="form-control" autocomplete="off" value="<?=$users['l_name']?>"><br>
  </div>

    <div class="form-group">
    <label>Email:</label>
  <input type="text" name="email" class="form-control" autocomplete="off" value="<?=$users['email']?>"><br>
  </div>

  <div class="form-group">
  <label>Password:</label>
  <input type="password" name="password" class="form-control" autocomplete="off" value="<?=$users['password']?>"><br>
  </div>

  <div class="form-group">
    <label>Role:</label>
    <select name="role_id" class="form-control">
        <?php
        if($users['role_id'] == 1)
        {
            ?>
      <option value="1" selected>Admin</option>
      <option value="2">User</option>
                <?php
        }
        ?>
        <?php
        if($users['role_id'] == 2)
        {
            ?>
             <option value="1">Admin</option>
      <option value="2" selected>User</option>
            <?php
        }
        ?>
    </select>
  </div>

<div class="container">
<button type="submit" class="btn btn-primary">UPDATE</button>
</div>

</form>
</div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
