<?php 
session_start();
if(in_array('id', array_keys($_SESSION))){
    include 'dbh.php';
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM user1 WHERE id = $id ";
    $newrecords = mysqli_query($conn,$sql);
    if($newrecords->num_rows <= 0){
        header("Location: /master/");
    }
}else{
    header("Location: /master/");
}

?>