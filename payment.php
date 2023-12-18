<?php

include 'checkLogin.php';
include 'paymentCheck.php';
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Payment</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <?php include 'header.php';  ?>

    <div class="container-fluid" style="margin-top:0px;">

        <div class="jumbotron">

            <div class="container">

                <div class="toDo">
                <br><br><br>
                    <h1>Payment</h1> <br>                        
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Duration</label>
                                <select class="form-control" name='year'>
                                    <option value="-1" selected>Months</option>
                                    <option value="3" selected>Basic Package(3 Month) - Rs.1500</option>
                                    <option value="6" selected>Premium Package(6 Month) - Rs.3000</option>
                                    <option value="12" selected>Delux Package(1 Year) - Rs.4500</option>
                                </select>
                            </div>
                        <div class="loginbutton">

                        <form action="https://uat.esewa.com.np/epay/main" method="POST">
                            <input value="0" name="tAmt" type="hidden">
                            <input value="0" name="amt" type="hidden">
                            <input value="0" name="txAmt" type="hidden">
                            <input value="0" name="psc" type="hidden">
                            <input value="0" name="pdc" type="hidden">
                            <input value="EPAYTEST" name="scd" type="hidden">
                            <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453<?php echo generateRandomString(12) ?>" name="pid" type="hidden">
                            <input value="http://localhost/master/paymentProcess.php?success=true" type="hidden" name="su">
                            <input value="http://localhost/master/paymentProcess.php?success=false" type="hidden" name="fu">
                            <input value="Submit" class="btn btn-danger btn-lg" type="submit">
                        </form>
                        </div>
                </div>


                <!-- <form class="" action="Plogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-danger btn-lg" name="login">Login</button>
              </div>
              </form> -->

            </div>
        </div>
    </div>

    <footer class="page-footer font-small blue">

        <div class="footer-copyright text-center py-3">© 2022 Copyright:
            <a href="">bsanjoul@gmail.com</a>
        </div>

    </footer>
<script>
    window.onload= () => {
        document.querySelector("select").addEventListener('input', (e) => {
            index = e.target.selectedOptions[0].value
            successElement = document.querySelector("input[name='su']")
            amt = document.querySelector("input[name='amt']")
            totalAmt = document.querySelector("input[name='tAmt']")
            priceRate = {'-1':0, "3" : 1500, "6" : 3000, "12" : 4500};
            amt.setAttribute('value', priceRate[index])
            totalAmt.setAttribute('value', priceRate[index])
            successElement.value = `http://localhost/master/paymentProcess.php?success=true`
        })
    }

</script>
</body>

</html>