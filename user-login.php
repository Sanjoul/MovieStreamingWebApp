<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NepaliMovie-Login</title>
  <link rel="stylesheet" href="user-login.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container-fluid">

    <div class="jumbotron">

      <div class="container">

        <div class="toDo">
          <h1>Login to your account</h1> <br>

          <form action="plogin.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="pass" value="">
              </div>
            </div>
            <div class="loginbutton">
              <button type="submit" class="btn btn-danger btn-lg" name="login">Login</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2023 Copyright:
      <a href="">bsanjoul@gmail.com</a>
    </div>

  </footer>
</body>

</html>