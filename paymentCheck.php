<?php
include 'dbh.php';

session_start();
$isPaymentValid = false;
$subscriptionDate = time();
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];

    $userQuery = "SELECT * FROM user1 WHERE id = $id and subscription >= now()";
    $result = mysqli_query($conn, $userQuery);
    if($result->num_rows != 0){
        $isPaymentValid = true;
        $data = mysqli_fetch_assoc($result);
        $subscriptionDate = $data['subscription'];
    }
}
?>