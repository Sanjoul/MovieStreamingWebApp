
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />  
    <link rel="stylesheet" href="style/style.css">
    <!-- <link rel="stylesheet" href="user-login.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="icon" href="img/logo_transparent.png">
    <title>Movie Streaming App</title>
    
</head>
<body>


    <div class="upper">
        <div class="logo">
            <a href="#">
                <img src="img/logo_transparent.png" class="img-logo"/>
            </a>
        </div>
        <div class="login-div">
            <form  method="POST" class="login" action="email_verification_process.php" >
                <h1 style="text-align:center;">Verify</h1>
                <div class="input-text">
                <input type="hidden" name="mail" value="<?php echo $_GET['email'];?>" required>
                    <input type="text" id="inputEmail" name="verification_code" placeholder="Enter verification code" required/>
                </div>
                <br>
                    <button type="submit" name="verify_email" class="signin-button">Verify</button>
                </div>
            
            </form>
        </div>
    </div>
    <div class="bottom">
        <div class="bottom-width">
            Questions? Call <a href="tel:1-844-542-4813" class="tel-link">1-844-542-4813</a>
            <div>
                <ul class="bottom-flex">
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            FAQ
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Help Center
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Terms of Use
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Privacy
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Cookie Preferences
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Corporate information
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <select class="fa select-language">
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;English</option>
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;Fran&ccedil;ais</option>
                </select>
            </div>
        </div>
    </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
