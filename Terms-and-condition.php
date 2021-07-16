<?php 
session_start(); 
	include_once(__DIR__ .'/authentication/functions.php');
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: Terms-and-condition.php");
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


    <title> Donation.lk - Terms & Conditions</title>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/Terms and condition.css" type="text/css">


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


<div class="Terms">
    <div class="container">
        <div class="Conditions">
            <h3>Terms & Conditions</h3>
                <p>Donation.lk is a service provided by NSMB Students.
                    (subject to your compliance with the Terms and Conditions set forth below).
                    Please read these Terms and Conditions before using this Web Site.</p>
        </div>
        <div class="Privacy">
            <h3>Privacy</h3>
                <p>
                     Donation.lk and NSBM Students will collect information from Users and Advertisers. 
                    It is a condition of use of the Donation.lk that each User and advertiser consents and 
                    authorises Donation.lk and NSBM Students to collect and use this information. Donation.lk and
                     NSBM Students also reserves the right to disclose it to Company Affiliates and any other person
                     for the purposes of administering, supporting and maintaining Donation.lk, as well as
                     for improving Donation.lk for example by using the information for research,  development and planning.
                </p>
        
        </div>
        <div class="law">
            <h3>Governing law</h3>
                 <p>
                     Donation.lk is operated under the laws and regulations of Sri Lanka.
                </p>
        
        </div>
        <div class="Modifications">
            <h3>Modifications</h3>
                 <p>
                    Donation.lk & NSBM student reserves the right to modify these Terms and Conditions. 
                    Such modifications shall be effective immediately upon posting on Donation.lk. You are responsible for the reviewing of such modifications. 
                    Your continued access or use of Donation.lk shall be deemed your acceptance of the modified terms and conditions.
                </p>
        
        </div>
        <div class="availability">
            <h3>Site availability</h3>
                 <p>
                    Donation.lk and does not guarantee continuous or secure access to the Web Site.
                     The Web Site is provided "as is" and as and when available.
                </p>
        
        </div>

    </div>

</div>

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