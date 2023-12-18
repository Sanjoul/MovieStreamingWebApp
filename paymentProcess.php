<?php 

$priceRate = [3 => 1500, 6 => 3000, 12 => 4500];
include 'dbh.php';
include 'paymentCheck.php';
session_start();
if(!isset($_SESSION['id'])){
    echo "Failed!!";
    return;
}

if(isset($_GET['success']) && isset($_GET['amt'])){
    $success = $_GET['success'];
    $amt = $_GET['amt'];
    if($success != 'true'){
        echo "Failed!!";
        return;
    }
    $user_id = $_SESSION['id'];
    foreach($priceRate as $key => $value){
        if($value == $amt){
            $date = date('Y-m-d', time());

            $date = strtotime($date) + (160 *60 * 24 * (30 * $key));
            $toStore = date('Y-m-d', $date);

            if($isPaymentValid){
                $date = strtotime($subscriptionDate) + (160 *60 * 24 * (30 * $key));
                $toStore = date('Y-m-d', $date);
            }

            $sql = "UPDATE user1 SET subscription = '$toStore' WHERE id = $user_id";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "success!!";
                header("Location: homepage.php");
            }else{
                echo "failed";
            }
        }
    }
}else{
    echo "Failed!!";
}

?>