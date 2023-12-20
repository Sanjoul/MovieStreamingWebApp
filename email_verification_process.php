<?php

if (isset($_POST["verify_email"]))
{
    $email = $_POST["mail"];
    $verification_code = $_POST["verification_code"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "test");

    // mark email as verified
    $sql = "UPDATE user1 SET email_verified_at = NOW() WHERE email = '". $email ."' AND verification_code = '". $verification_code ."'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 0)
    {
        die("Verification code failed.");
    }
    header("Location: index.php");
    exit();
}

?>