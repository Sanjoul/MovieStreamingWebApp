<?php
include 'dbh.php';


    $movieQuery = "SELECT *  FROM movies order by viewers DESC" ;
    $maxDatas = mysqli_query($conn, $movieQuery);
    $maxRow = mysqli_fetch_assoc($maxDatas);
    $genreToShow = $maxRow['genre'];

    $newim = "SELECT * FROM movies WHERE genre = '$genreToShow'";
    $newrecords = mysqli_query($conn,$newim);

    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echo"<form id='movies' action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' height='250' width='200' style='margin-top: 2px;margin-left:2px;margin-right:0px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-warning' style='display:block;width:200px;padding-bottom:15px;margin-bottom:10px;margin-left:10px;margin-right:0px;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";


    }
