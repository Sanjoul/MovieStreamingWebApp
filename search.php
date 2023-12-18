<?php
session_start();

 ?>

<style>
  .nav-link {
  color: white !important;

}

.jumbotron{
  background: rgba(50,46,87,255) !important;
  color: white;
}

.container-fluid{
  background-image: none;
  height: 10vh;

}


</style>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Movie</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>
    

        <nav class="navbar navbar-expand-md navbar-light bg-light" style="height:60px ; background: rgba(50,46,87,255) !important; ">
            <a href="homepage.php" class="navbar-brand"> <img src="img/logo_transparent.png" alt=""> </a>
            

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid' style='background-image:none; height:0vh;' ;>
                  ";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);

              echo"
                  </header>
                  <section>


                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:black;font-size:30px;'>Recent :
                    <input type='submit' name='submit' class='btn btn-danger' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Search By</option>
                        <option value='1'>Name</option>
                        <option value='2'>Genre</option>
                        <option value='3'>Release year</option>
                      </select>
                      <input type='text' placeholder='Enter..' name='textoption' style='margin-left:10px;margin-top:10px;padding:5px;'>

                      <input type='submit' name='submit' class='btn btn-danger' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      <div class="jumbotron">
        <h2 style='margin-top:0px;padding-top:0px;'>Results : </h2>

            <?php
            include 'searchback.php';
            ?>

      </div>


  </section>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2023 Copyright:
      <a href="">bsanjoul@gmail.com</a>
    </div>

  </footer>
  </body>
</html>
