<?php
include 'dbh.php';


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echo"<form action='movie.php' id='movies' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$result['imgpath']."' height='250' width='200' style='margin-top: 10px;margin-left:10px;margin-right:0px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-warning' style='display:block;width:200px;padding-bottom:15px;margin-bottom:10px;margin-left:10px;margin-right:0px;' value='".ucwords($result['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";

      if ($i==6) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";
    ?>
