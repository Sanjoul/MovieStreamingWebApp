

<?php
  session_start();
  include 'dbh.php';
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
if (isset($_POST["SignUp"])){
  $mail = new PHPMailer(true);
  try{
    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $phn =  $_POST['phn'];
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password = $_POST['pass'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."-".$month."-".$year;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bsanjoul@gmail.com';
    $mail->Password = 'njvswjrqcsrsdliv';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('bsanjoul@gmail.com');

    $mail->addAddress($email, $fname);
    $mail->isHTML(true);

    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

    $mail->Subject = 'Email verification';
    $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';

    $mail->send();
  }catch(Exception $e){
    echo"Message could not be sent {$mail->ErrorInfo}";
  }

    $sql = "INSERT INTO user1(username, passwd, name, phone, email, DOB,verification_code, email_verified_at) 
    values('".$username."','".$hashedPassword."','".$name."','".$phn."','".$email."','".$dob."','".$verification_code."', NULL)";
    echo $sql;
    $result = $conn->query($sql);
    header("Location: email-verification.php?email=" . $email);
    exit();

}
?>
