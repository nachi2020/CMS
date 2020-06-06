<?php
include 'helper/helper.php';
Helper::isNotLogin();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../resources/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/user_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include_once 'layout/nav_bar.php'; ?>
 <div class="container">
   <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-blue">
                    <div class="inner">
                        <h3> <div id="total_contact"></div> </h3>
                        <p> Manage Contact</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                    </div>
                    <a href="contact.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-green">
                    <div class="inner">
                        <h3> ₹185358 </h3>
                        <p> Today’s Collection </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <h3> 5464 </h3>
                        <p> New Admissions </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-red">
                    <div class="inner">
                        <h3> 723 </h3>
                        <p> Faculty Strength </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#total_contact').html('<img src="../../resources/Gear-0.2s-200px.svg" height="20px" >');
        $.get('../../app/api/dashboard.php',function(data){
          var json_data = JSON.parse(data);
          $('#total_contact').html(json_data.total_contact);
        });
      });
    </script>
  </body>
</html>
