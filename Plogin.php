<?php
  session_start();
  include 'dbh.php';


    $username =  $_POST['mail'];
    $password =  $_POST['pass'];



    $stmt = $conn->prepare("SELECT * FROM user1 WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    

    // if(!$row = $result->fetch_assoc()) {
    //   header("Location:index2.php");
    // }else {
    //     $_SESSION['id'] = $row['id'];
    //     if($row['user_type'] == 0){
    //       header("Location: /master/admin");
    //     }else{
    //       header("Location: homepage.php");
    //     }
    //   }
    $row = $result->fetch_assoc();
    if (($row ) && password_verify($password, $row['passwd'])) {
      $_SESSION['id'] = $row['id'];
      // Check user type and redirect accordingly
      if ($row['user_type'] == 0) {
          header("Location:/master/admin");
      } else {
          header("Location: homepage.php");
      }
      exit();
  } else {
      $loginError = "Incorrect username or password";

      // Redirect back to the login page with the error message
      header("Location: index.php?error=" . urlencode($loginError));
      exit();
  }
  
    

?>
