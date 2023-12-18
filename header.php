<style>
    nav {
        border-bottom: 1px solid black;
    }

    .jumbotron {
        background: rgba(20, 20, 20, 0.5) !important;

        backdrop-filter: blur(10px);
    }

    .footer-copyright {
        background-color: #343a40 !important;
        color: white;
    }

    .footer-copyright a {
        list-style: none;
        color: white;
    }

    a {
        color: #d1d0cf;
        text-decoration: none;
        outline: medium none;
        transition: all 0.5s ease-out 0s;
    }

    a:hover{
        color: #e50914 !important;
        display: block !important;
    animation: fade-in 0.5s cubic-bezier(0.39,0.575,0.565,1) both;
    }
    header{
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 99;
    background: rgba(69,65,114,255) !important;
    backdrop-filter: blur(10px);
}
    
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<header>
    <nav class="navbar navbar-expand-md " style="height:60px ; background:rgba(33,30,66,255) !important;">
        <a href="/master/homepage.php" class="navbar-brand"> <img src="img/logo_transparent.png" alt=""> </a>
       

        <ul class="navbar-nav" >

            <?php
            $show = true;
            error_reporting(0);
            session_start();
            if (in_array('id', array_keys($_SESSION))) {
                include 'dbh.php';
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM user1 WHERE id = $id ";
                $newrecords = mysqli_query($conn, $sql);
                if ($newrecords->num_rows > 0) {
                    $show = false;
                }
            }
            if ($show) {
                ?>

                <li class="nav-item" > <a href="user-login.php"  class="nav-link"> SignIn</a> </li>
                <li class="nav-item"> <a href="createaccount.php" class="nav-link">Sign Up</a> </li>
                <?php
            } else {
                ?>
                <li class="nav-item"> <a href="homepage.php" class="nav-link" style="color: white ;"> Homepage</a> </li>

                <?php
            }
            ?>


            <li class="nav-item"> <a href="subscription.php" class="nav-link" style="color: white ;">Subscription</a> </li>
            <li class="nav-item"> <a href="contact.php" class="nav-link" style="color: white ;"> Contact Us</a> </li>
        </ul>
    </nav>
</header>







