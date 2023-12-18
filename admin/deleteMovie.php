<?php
$id = $_GET['id'];
if(isset($id) && is_numeric($id)){
    include '../dbh.php';
    $sql = "SET FOREIGN_KEY_CHECKS=0;";
    $result = mysqli_query($conn, $sql);
    $sql = "DELETE FROM movies WHERE mid = $id";
    $trueResult = mysqli_query($conn, $sql);
    $sql = "SET FOREIGN_KEY_CHECKS=1;";
    $result = mysqli_query($conn, $sql);
    if($trueResult){
        echo "<alert>Movie Deleted Successfully</alert>";
    }else{
        echo "<alert>Something went wrong</alert>";
    }
}

header("Location: ../admin/viewMovies.php");
?>