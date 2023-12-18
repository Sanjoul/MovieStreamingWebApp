<?php 
error_reporting(0);
session_start();
if(in_array('id', array_keys($_SESSION))){
    include '../dbh.php';
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM user1 WHERE id = $id ";
    $newrecords = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($newrecords);
    if($result['user_type'] != 0){
        header("Location: /");
    }
}
?>