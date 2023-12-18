<?php
include 'dbh.php';
// require_once 'movie.php';
  $im = "SELECT  * FROM movies" ;
  $records = mysqli_query($conn,$im);
  try{
    $engine = new ContentBasedRecommend($currgenre, $objects);
  }catch(Exception $e){
    echo "message:" .$e->getMessage();
  }
    
  foreach($engine->getRecommendation() as $k=> $row){
    if($row>0.6){
        $recim= "SELECT * FROM movies where name='$k'";
        $recrecords= mysqli_query($conn, $recim); 
            echo"<div >";
              
              while($result = mysqli_fetch_assoc($recrecords)){
                
                echo"<form action='movie.php' method='POST'>";
                echo"<div style='float:left; '>";
                echo "<img src='uploads/".$result['imgpath']."' height='250' width='200' style='margin-top: 30px;margin-left:30px;margin-right:20px;' />";
                  echo"<div class='noob'>";
                    echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;' value='".ucwords($result['name'])."'/>";
                  echo"</div>";
                echo"</div>";
                echo"</form>";
                
               
              }
            }
              
    }
    echo"</div>";
?>
