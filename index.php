<?php
// require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login page</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark" style="background-image:url('images/picture3.png') no-reapet;margin-top: 120px;">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="exampleInputUsername">Username</label>
              <input class="form-control" id="exampleInputUsername" type="text" aria-describedby="emailHelp" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
            </div>
            <!-- <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember Password</label>
                </div>
              </div> -->
              <button type="submit" class="btn btn-primary col-lg-12" name="submit">Submit</button>
              <!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
            </form>
            <!-- <div class="text-center">
              <a class="d-block small mt-3" href="register.html">Register an Account</a>
              <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
  </html>