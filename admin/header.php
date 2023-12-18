
<style>
    nav{
        border-bottom: 1px solid black;
        
    }
    .jumbotron{
        background:rgba(69,65,114,255)!important;
    }
    .footer-copyright{
        background:rgba(69,65,114,255)!important;
        color: white;
    }
    .footer-copyright a{
        list-style: none;
        color: white;
    }
</style>

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark " style=" background:rgba(69,65,114,255)!important;">
        <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
        <a class="navbar-text" href="../homepage.php">Movie Streaming App</a>

        <ul class="navbar-nav">
            <li class="nav-item"> <a style="color:white ;" href="../admin/" class="nav-link">Add Movies</a> </li>
            <li class="nav-item"> <a style="color:white ;" href="../admin/createadmin.php" class="nav-link">Add Admin</a> </li>
            <li class="nav-item"> <a style="color:white ;" href="../admin/viewMovies.php" class="nav-link">View Movies</a> </li>
        </ul>
    </nav>
</header>
<?php
  include 'checkLogin.php';
 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Movie Streaming App</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   