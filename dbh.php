<?php
  $conn = mysqli_connect("localhost","root","","test");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
