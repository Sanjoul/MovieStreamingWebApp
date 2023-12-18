<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Nep-Film</title>
    <link rel="stylesheet" href="homepage.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php';  ?>


    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="card-deck">
            <div class="card text-white bg-danger ">
                <img class="card-img-top" width="500px" height="200px" src="https://www.seekpng.com/png/detail/651-6518040_basic-package.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Basic Package</h5>
                    <p class="card-text">3 Month for NRP.1500</p>
                </div>
            </div>
            <div class="card text-white bg-secondary">
                <img class="card-img-top" width="500px" height="200px" src="https://cdn.shopify.com/s/files/1/0142/5565/2928/products/premium_package_1200x1200.png?v=1552217279" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Premium Package</h5>
                    <p class="card-text">6 Month for NRP.3000</p>
                </div>
            </div>
            <div class="card text-white bg-info">
                <img class="card-img-top" width="500px" height="200px" src="https://logodix.com/logo/1129408.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Deluxe Package</h5>
                    <p class="card-text">1 Year for NRP.4500</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>