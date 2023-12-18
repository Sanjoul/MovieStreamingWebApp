<?php
error_reporting(0);
session_start();
include './checkLogin.php';
// include './header2.php'
 ?>
<style>
  #movies{
    border-radius: 10%;
    border: 1px solid black;
    background-color: black;
    margin-left: 20px;
}
.footer-copyright{
    background-color: #343a40 !important;
    color: white;
}
.footer-copyright a{
    list-style: none;
    color: white;
}
.nav-link {
  color: white !important;

}
.jumbotron{
  /* background: rgba(238,131,116,255) !important; */
  /* background: rgba(244,65,51,255) !important; */
  background:rgba(69,65,114,255)!important;
  /* background: rgba(50,46,87,255) !important; */
}

</style>
<?php 
               include 'dbh.php';
               $id = $_SESSION['id'];
               $quer = "SELECT * FROM user1 WHERE id = '$id' ";
               $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
               $check = mysqli_query($conn,$quer);
               $rel = mysqli_fetch_assoc($check);
               $check2 = mysqli_query($conn,$quer2);
               $rel2 = mysqli_fetch_assoc($check2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Homepage</title>
  <link rel="icon" href="img/logo_transparent.png">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark " style="height:60px ; background: rgba(50,46,87,255) !important; ">
            <a  href="homepage.php" class="navbar-brand"> <img src="img/logo_transparent.png" alt=""> </a>
            
            <ul  class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li  class='nav-item'> <a  href='account.php' class='nav-link'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  </ul>
                  <span style='margin-left:30%; color:white;'>Welcome, ".ucwords($rel['name'])."</span>
                  </nav>

                  </header>
                  <section >
                  
";
?>
                <div class='jumbotron' style='padding-top:5px;padding-bottom:0px;height:60px; margin-top:10px; margin-bottom:0px; border: 1px solid black;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:white;font-size:30px;'>Recent :
                    <input type='submit' name='submit' class='btn btn-danger' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='<?php echo ucwords($rel2['name']) ?>'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Search By</option>
                        <option value='name'>Name</option>
                        <option value='genre'>Genre</option>
                        <option value='rdate'>Release year</option>
                      </select>
                      <input type='text' placeholder='Enter..' style='margin-left:10px;margin-top:10px;padding:5px;' name='textoption'>

                      <input type='submit' name='submit' class='btn btn-danger' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;background-color:white !important; color: rgba(69,65,114,255)!important ' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>
      <div class="jumbotron" style="margin-top:10px ;">
        <h2 style='margin-top:0px;padding-top:0px; color:white;'>Most Watched Genre</h2>
          <div class="row">
            <?php
              include 'mostwatch-fetcher.php';
             ?>
          </div>
      </div>
      <div class="jumbotron" >
        <h2 style='margin-top:px;padding-top:0px;color:white;'>Latest updated</h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div>
      <div class="jumbotron">
        <h2 style="color:white;">  All movies</h2>
          <?php
            include 'fetcher.php';
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
