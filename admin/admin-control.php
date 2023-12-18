<?php
session_start();
if (isset($_POST['upload'])) {

  include '../dbh.php';

  $targetvid = "../video-uploads/" . basename($_FILES['video']['name']);
  $target = "../uploads/" . basename($_FILES['image']['name']);

  $name = strtolower($_POST['mname']);
  $rdate = $_POST['release'];
  $genre = strtolower($_POST['genre']);
  $genre2 = strtolower($_POST['genre2']);
  $genre3 = strtolower($_POST['genre3']);
  $genre4 = strtolower($_POST['genre4']);
  $genre5 = strtolower($_POST['genre5']);
  $rtime = $_POST['rtime'];
  $desc = $_POST['desc'];
  $image = $_FILES['image']['name'];
  $video = $_FILES['video']['name'];

  try {
    $sql = "INSERT INTO movies (name, rdate, genre,genre2,genre3,genre4,genre5, runtime, decription, imgpath, videopath)
    VALUES('$name','$rdate','$genre','$genre2','$genre3','$genre4','$genre5','$rtime','$desc','$image','$video')";

    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['video']['tmp_name'], $targetvid)) {
      header("Location: viewMovies.php");
    }
    
    
  } catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
}


?>