<?php 
session_start(); 
	include_once(__DIR__ .'/authentication/functions.php');
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: Service.php");
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
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- link href="img/favicon.ico" rel="icon" -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title> Donation.lk - Service</title>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/Style-Service.css" type="text/css">


</head>

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark" id="Nav-Bar">
    <div class="container">
        <a href="Index.php" class="navbar-brand" id="donation.lk"> <img src="./img/Untitled-2.png" alt="DONATION.LK"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="about us.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Service.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login.php">My account</a>
                </li>
                <?php 
                
                if( isLoggedin()) {
                    ?>
                        <li class="nav-item">   
                        <a class="nav-link" aria-current="page" id="post-ad" href="Postad.php">POST DONATION</a>
                        </li>
                    <?php
                }
                else{
                    ?>
                        <li class="nav-item">   
                        <a class="nav-link" aria-current="page" id="post-ad" href="login.php">POST DONATION</a>
                        </li>
                    <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="contact-us.php">Help & Contact</a>
                </li>
                <?php 
                
                if( isLoggedin()) {
                    ?>
                        <li class="nav-item">   
                            <a class="nav-link" aria-current="page" href="/?logout=t">Logout</a>
                        </li>
                    <?php
                }
                ?>
                
               
            </ul>
        </div>
    </div>
</div>

<!-- Nav Bar End -->

<!-- Catogry Start -->
<div class="service" id="service">
    <div class="container">
        <div class="section-header">

            <h2>Our Best Services</h2>
            <br>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=1"><i class="fa fa-book" aria-hidden="true"></i> </a>
                    <h3>Education</h3>
                    <p>
                    Considered as the most valuable investment of all time.
                     Help someone get that and lend them power to thrive forward.
                    </p>
                    
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=2"><i class="fa fa-medkit" aria-hidden="true"></i></a>
                    <h3>Health</h3>
                    <p>
                    Good health is some what a lot of people desire for, help those who cannot achieve that by themselves.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=3"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <h3>Project Research</h3>
                    <p>
                    Maybe the most important thing for becoming an advanced society. 
                    Let the researchers be guided by you to achieve wonderful things for greater good.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=4"> <i class="fa fa-snowflake-o" aria-hidden="true"></i></a>
                    <h3>Charity</h3>
                    <p>
                    Help religious organizations to grow by lending your help. And help them to make the world more peaceful and better.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=5"><i class="fa fa-child" aria-hidden="true"></i></a>
                    <h3>For Children's home</h3>
                    <p>
                    For kids and children who do not have homes of their own and to grow with their families, 
                    Let's help them to make a one big family for the sake of their future.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=6"> <i class="fa fa-users" aria-hidden="true"></i></a>
                    <h3>Family Support</h3>
                    <p>
                    Contact the respective parties for supporting families, those who cannot live happily on their own.
                     Make their world beautiful and give them a reason to live for.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=7"> <i class="fa fa-home" aria-hidden="true"></i></a>
                    <h3>Suport Build Home</h3>
                    <p>
                    This is for those who do not have a home on their own.
                     Help them build a roof over their heads so they have something they can put their families into.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <a href="serviceAds.php?don_type_id=8"><i class="fa fa-sign-language" aria-hidden="true"></i></a>
                    <h3>To develop Life Skills</h3>
                    <p>
                        To survive in this society people must have life skills. Help those who cannot achieve it by themselves.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category End -->

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