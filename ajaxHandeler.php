<?php
include 'dbh.php'; 
if(isset($_POST['rating'])){
    $createTable = "CREATE TABLE IF NOT EXISTS ratings (
        id INT(11) NOT NULL AUTO_INCREMENT,
        movie_id int(11),
        user_id int(11),
        rating int(11),
        PRIMARY KEY(id)
    )";
    $table = mysqli_query($conn, $createTable);
    $user_id = $_POST['user_id'];
    $movie_id = $_POST['movie_id'];
    $rating = $_POST['rating'];
    $find = "SELECT * FROM ratings WHERE movie_id = $movie_id and user_id = $user_id";
    $foundData = mysqli_query($conn, $find);
    
    $sql = "INSERT INTO ratings(movie_id, user_id, rating) VALUE($movie_id, $user_id, $rating)";
    if($foundData->num_rows != 0){
        $sql = "UPDATE ratings set rating = $rating WHERE movie_id = $movie_id and user_id = $user_id";
    }
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "done";
    }
}
?>