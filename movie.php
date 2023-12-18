<style>
  body {
    background-color: rgba(69, 65, 114, 255) !important;
  }

  .jumbotron-fluid {
    background-color: rgba(69, 65, 114, 255) !important;
  }

  .jumbotron-fluid * {
    color: white !important;
  }

  #toChange {
    color: black !important;
  }

  .checked {
    color: orange !important;
  }

  .nav-link {
    color: white !important;

  }
</style>
<?php
error_reporting(0);
session_start();
require_once 'recommend.php';
require_once 'content_based.php';

if (isset($_POST['submit'])) {
  try {
    $title = $_POST['submit'];

    include 'dbh.php';
    include 'paymentCheck.php';
    if (!$isPaymentValid) {
      header("Location: payment.php");
    }
    $im = "SELECT * FROM movies WHERE name = '$title'";

  } catch (Exception $e) {
    echo "message:" . $e->getMessage();
  }
  //Recommendation
  try {
    $countRow = "SELECT COUNT(*) FROM movies;";
    $dr_reccGenre = mysqli_query($conn, "SELECT genre, genre2, genre3, genre4, genre5  FROM movies;");
    $dr_reccName = mysqli_query($conn, "SELECT name FROM movies ORDER By mid ASC;");
    $cr_genre = mysqli_query($conn, "SELECT genre,genre2,genre3,genre4,genre5 FROM movies WHERE name= '$title';");
  } catch (Exception $e) {
    echo "message:" . $e->getMessage();
  }


  //------
  $records = mysqli_query($conn, $im);

  echo "<!DOCTYPE html>";
  echo "<html lang='en' dir='ltr'>";
  echo "<head>";
  echo "<meta charset='utf-8'>";
  echo "<title>" . $title . "</title>";
  echo "<link rel='stylesheet' href='movie.css'>";
  echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
  echo "</head>";
  echo "<body>";

  echo "<div class='jumbotron-fluid'>";
  echo "<div class='container'>";

  while ($result = mysqli_fetch_assoc($records)) {
    $mname = $result['name'];
    $person = $_SESSION['id'];
    $movieid = $result['mid'];
    $current = $result['viewers'];
    $newcount = $current + 1;
    $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
    $nsql = "UPDATE user1 SET mid = '$movieid'";

    $ratingQuery = "SELECT * FROM ratings WHERE user_id = $person and movie_id = $movieid";
    $ratingData = mysqli_query($conn, $ratingQuery);
    $ratings = -1;
    if ($ratingData->num_rows != 0) {
      $row = mysqli_fetch_assoc($ratingData);
      $ratings = $row['rating'];
    }

    $updatecount = mysqli_query($conn, $newsql);
    $updatecount = mysqli_query($conn, $nsql);

    $url = "video-uploads/" . $result['videopath'];

    echo "<br>";
    echo "<a href='homepage.php' style='font-size: 20px;color:white;border:1px solid white;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
    echo "<br><br><h3 style='display: inline;'>Movie Name: </h3><h5 id='toChange' style='display: inline;'>" . ucwords($result['name']) . "</h5>";
    echo "<br><h3 style='display: inline;'>Genre: </h3><h5 id='toChange' style='display: inline;'>" . ucwords($result['genre']) . "</h5>";
    echo "<br><h3 style='display: inline;'>Release Year: </h3><h5 id='toChange' style='display: inline;'>" . ucwords($result['rdate']) . "</h5>";
    echo "<br><h3 style='display: inline;'>Description: </h3><h5 id='toChange' style='display: inline;'>" . ucwords($result['decription']) . "</h5>";
    echo "<br><h3 style='display: inline;'>Runtime: </h3><h5 id='toChange' style='display: inline;'>" . ucwords($result['runtime']) . " mins</h5>";
    echo "<br><h3 style='display: inline;'>Views: </h3><h5 id='toChange' style='display: inline;'>" . ucwords($result['viewers']) . "</h5>";

    ?>
    <br>
    <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>

    Rating:

    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <script>
      window.onload = () => {
        let stars = Array.from(document.querySelectorAll(".fa-star"));
        let rating = <?php echo $ratings ?>;
        if (rating != 0) {
          rate(stars[rating - 1]);
        }
        stars.forEach((element) => {
          element.addEventListener("click", (e) => {
            console.log(element)

            rate(element);
          });
          /********** */
        });

        function rate(element) {
          stars.forEach((el) => {
            el.classList.remove("checked");
          });
          selectedRating = stars.indexOf(element);
          for (let i = 0; i <= selectedRating; i++) {
            stars[i].classList.add("checked");
          }
          // console.log(selectedRating + 1);
          $.ajax({
            url: "/ajaxHandeler.php",
            data: { rating: selectedRating + 1, user_id: <?php echo $person ?>, movie_id: <?php echo $movieid ?> },
            method: "POST",
          })
        }
      }

    </script>
    <?php

    echo "<br><br>";
    echo "<div class='embed-responsive embed-responsive-16by9'>";
    echo '<video controls="controls" class="embed-responsive-item">
    <source src="' . $url . '" type="video/mp4"> 
    Your browser does not support the HTML5 Video element.
    </video>
    ';

    echo "</div>";

  }

  //---recommendation
  while ($row = mysqli_fetch_array($dr_reccName, MYSQLI_ASSOC)) {

    $names[] = $row['name'];


  }
  while ($row = mysqli_fetch_array($dr_reccGenre, MYSQLI_ASSOC)) {



    $genres[] = [$row['genre'], $row['genre2'], $row['genre3'], $row['genre4'], $row['genre5']];


  }

  $objects = array_combine($names, $genres);


  foreach ($cr_genre as $v) {
    $g1[] = $v['genre'];
    $g2[] = $v['genre2'];
    $g3[] = $v['genre3'];
    $g4[] = $v['genre4'];
    $g5[] = $v['genre5'];
  }
  $currgenre = array_merge($g1, $g2, $g3, $g4, $g5);

  $engine = new ContentBasedRecommend($currgenre, $objects);

  //------recommendedClose  
  ?>



  <!--
      <br><br><br>
    <div class='embed-responsive embed-responsive-16by9'>
    <video id="my-player" class="embed-responsive-item video-js" controls preload="auto" poster="uploads/<?php //echo $result['imgpath'] ?>" data-setup='{}'>
      <source src="video-uploads/<?php //echo $result['videopath'] ?>" type="video/mp4">
      </source>
      <source src="video-uploads/<? php // echo $result['videopath'] ?>" type="video/webm">
      </source>
      <source src="video-uploads/<?php //echo $result['videopath'] ?>" type="video/ogg">
      </source>
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank">
          supports HTML5 video
        </a>
      </p>
    </video>
     -->





  <?php


  echo "</div>";
}
echo "</div>";
echo "</div>";

echo "</body>";


echo "</html>";



?>

<h2 style='margin-top:0px;padding-top:0px; color:White; text-align: center;'>You may also liked it</h2>
<?php
include "recommendedfetcher.php";
?>