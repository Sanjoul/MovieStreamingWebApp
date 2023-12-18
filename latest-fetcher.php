<?php
include 'dbh.php';



  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


  $i=$count;
  $j=$count-3;
  //$newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$i'" ;
  $newim = "SELECT * FROM movies WHERE mid =21";
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echo"<form id='movies' action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' height='250' width='200' style='margin-top: 10px;margin-left:10px;margin-right:0px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-warning' style='display:block;width:200px;padding-bottom:15px;margin-bottom:10px;margin-left:10px;margin-right:0px;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";


    }

    ?>
