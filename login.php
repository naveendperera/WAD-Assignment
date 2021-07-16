<?php 
//session_start();

include_once(__DIR__ ."\authentication\connection.php");
include_once(__DIR__ ."/authentication/functions.php");

    if (!isset($_SESSION)) {
        session_start();
    }
     
?>
<?php 
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: login.php");
    	die;
    }
    else {
        
    }  
        $ud =    user_details();
        //print_r($ud);
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Portfolio HTML Template" name="keywords">
    <meta content="Portfolio HTML Template" name="description">

    <!-- Favicon -->
    <!-- link href="img/favicon.ico" rel="icon" -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title> Donation.lk - Login</title>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/login.css" type="text/css">


</head>
<body>

<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">

                <div class="about-img">
                    <div class="about-img-1">
                        <a href="Index.php" ><img src="./img/Untitled-1.png" alt="Image"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="login-form">
                    <button type="button" class="btn btn" id="Donate-now">
                        <div class="section-header" id="loginf">
                            <h2>Login Form</h2>
                        </div>
                        <form action="" method="post">
                          <div class="container">
                              <div class="Usname">
                                <label for="uname"><b>Username  </b></label>
                                <input type="text" placeholder="                 Enter Email " name="user_name" required  >
                            </div>
                            <div class="Upass">
                                <label for="psw"><b>Password    </b></label>
                                <input type="password" placeholder="                 Enter Password" name="psw" required>
                            </div>      
                            <div class="Ucheckb">
                                <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                            </div>
                          <div class="logingbt"id="logbt">
                            <input class="btn btn-warning"  type="submit" value="Log In" >
                          </div>
                          <?php //print_r($_POST); ?>              
                    <?php 
                if($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    
                    if(isset($_POST['user_name']) && 
                        isset($_POST['psw'])){
                        
                        $con = connection();
                        
                        $user_name = mysqli_real_escape_string($con , $_POST['user_name']);
                        $psw = mysqli_real_escape_string($con , $_POST['psw']) ; 
                        $remember = mysqli_real_escape_string($con , $_POST['remember']);

                        if(user_go_login($user_name,$psw,$remember))
                        {
                            header("Location: Postad.php");
                        }
                        else {
                            echo '<span class="error-msg" >Invalid Login details</span>';
                        }
                    }
                }
                    ?>
                        </form>

                        <div class="signup" id="signup1">
                            <label for="signuptxt"><b>Don't have an account yet?   </b></label>
                            <a class="btn btn-warning" href="Singup-form.php" role="button" id="signbt">Sign up</a>
                        </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
    
<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-contact">
                            <h2>About Donation.lk</h2>
                            <p> <a href="about us.php">About us</a></p>
                            <p> <a href="Terms-and-condition.php">Terms & Conditions</a></p>
                            <p> <a href="Privacy-Policy.php">Privacy policy</a></p>
                            <div class="footer-social">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-link">
                            <h2>Social</h2>
                            <p><a href="https://www.facebook.com/">Facebook</a></p>
                            <p><a href="https://twitter.com/">Twitter policy</a></p>
                            <p><a href="https://www.youtube.com/">YouTube</a></p>
                            <p><a href="https://www.blogger.com/">Blogger</a></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="footer-newsletter">
                    <h2>To Get Involved</h2>
                    <p>
                    You can get involved in donations directly for our community services,<br>
                        We are transferring your donations to funds or people who want help by our intervention and 100% being radically transparent.
                    </p>
                    <div class="form" id="paypal">
                        <div class="col-md-6" id="footer-newsletter">
                        <?php 
                
                if( isLoggedin()) {
                    ?>
                        <a href="https://www.paypal.com/donate?hosted_button_id=XG7BMF6DSUGDN"> <img src="./img/paypal.png" alt="Icon"></a>
                    <?php
                }
                else{
                    ?>
                        <a href="login.php"> <img src="./img/paypal.png" alt="Icon"></a>
                    <?php
                }
                ?>
                        
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 <a href="Index.php">Donation.lk</a></p>
            </div>
            <div class="col-md-6" id="footer-img">
                <a href="Index.php"> <img src="./img/Untitled-2.png" alt="Icon"></a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


<!-- Template Javascript -->
<script src="./JS/main.js"></script>

</body>

</html>