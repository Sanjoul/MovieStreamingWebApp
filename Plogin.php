<?php
  session_start();
  include 'dbh.php';


    $username =  $_POST['mail'];
    $password =  $_POST['pass'];



    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

        $_SESSION['id'] = $row['id'];
        if($row['user_type'] == 0){
          header("Location: /master/admin");
        }else{
          header("Location: homepage.php");
        }
      }

    

?>
