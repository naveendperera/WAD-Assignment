<?php 
session_start(); 
	include_once(__DIR__ .'/authentication/functions.php');
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: about us.php");
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


    <title> Donation.lk - About Us</title>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/style-about.css" type="text/css">


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

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="./img/About-us photo.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>WHO WE ARE?</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                In the most simple possible way put, We manage to gather up a team to make other people's lives better and happier.
                                 Below mentioned are our primary concerns. 
                            </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Education</li>
                                <li><i class="fa fa-check-circle"></i>Health</li>
                                <li><i class="fa fa-check-circle"></i>Project Research</li>
                                <li><i class="fa fa-check-circle"></i>Charity</li>
                                <li><i class="fa fa-check-circle"></i>For Children's home</li>
                                <li><i class="fa fa-check-circle"></i>Family Support</li>
                                <li><i class="fa fa-check-circle"></i>Support Built Home</li>
                                <li><i class="fa fa-check-circle"></i>To develop Life Skils</li>
                            </ul>
                            <a class="btn btn-custom" href="Service.php" style="color: #3F69AA; font-weight: 600;font-size: 16;">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


<!-- About Us Start  222222-->
<div id="about">
    <div class="container-fluid">
        <div class="section-header">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="welcome m-auto">
                    <p>
                        Everyone has a choice as to whether or not they want to become an organ donor after they die, and if you choose to donate,
                         you can choose to donate either some or all of your organs and There are so many ways you can get involved or donate to
                          meet the needs of at-risk children and families in our care. We need your financial giving  we also rely on donations of 
                          home supplies, food, clothing, and other essentials to help support our mission and you can You can help kids worldwide build a
                           strong foundation and give good education for their future and we can support  Life Skills advocates for young people who need to develop creative,
                         critical thinking and collaborative skills and build vital attributes such as curiosity, courage and resilience.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 about-col">
                <div class="about-content">
                    <i class="fa fa-history"></i>
                    <h2>Our Story</h2>
                    <p>
                        This website was created by Donation, 
                        keeping Sustainability Development Goals in our mind which were given to our team by the University.
                    </p>
                </div>
            </div>
            <div class="col-md-4 about-col">
                <div class="about-content">
                    <i class="fa fa-bullseye"></i>
                    <h2>Our Mission</h2>
                    <p>
                        We believe in living for today and tomorrow because our decisions have a lasting impact on others' lives.
                         Our mission has been to help other people live more, happily and with great satisfactory.

                    </p>
                </div>
            </div>
            <div class="col-md-4 about-col">
                <div class="about-content">
                    <i class="fa fa-eye"></i>
                    <h2>Our Vision</h2>
                    <p>
                        People everywhere will share the power of a wish
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us End-->

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p id="tem-or">Meet Our Team</p>
                    
                </div>
                <div class="row" id="all-item">
                    <div class="col-lg-2 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./img/maneesha.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Maneesha Jeewanthi</h2>
                                <p>CS,NSBM</p>
                                <div class="team-social">
                                    <a href=""><i class='fa fa-twitter'></i></a>
                                    <a href="https://www.facebook.com/maneesha.jeewanthi.5"><i class='fa fa-facebook-f'></i></a>
                                    <a href="https://github.com/nmnjeewanthi"><i class='fa fa-github-square'></i></a>
                                    <a href="https://instagram.com/maneesha_jeewanthi?r=nametag"><i class='fa fa-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./img/ss.PNG" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Chathuranga Perera</h2>
                                <p>CS,NSBM</p>
                                <div class="team-social">
                                    <a href=""><i class='fa fa-twitter'></i></a>
                                    <a href="https://www.facebook.com/yasiru.chathuranga.50/"><i class='fa fa-facebook-f'></i></a>
                                    <a href="https://github.com/VPYCPERERA/VPYCPERERA"><i class='fa fa-github-square'></i></a>
                                    <a href=""><i class='fa fa-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./img/nil.PNG" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Nilmi Sewwandhi</h2>
                                <p>CS,NSBM</p>
                                <div class="team-social">
                                    <a href=""><i class='fa fa-twitter'></i></a>
                                    <a href=""><i class='fa fa-facebook-f'></i></a>
                                    <a href="https://github.com/Nilmi21"><i class='fa fa-github-square'></i></a>
                                    <a href=""><i class='fa fa-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="./img/naa.PNG" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Naveen D.     Perera</h2>
                                <p>MIS,NSBM</p>
                                <div class="team-social">
                                    <a href=""><i class='fa fa-twitter'></i></a>
                                    <a href="https://www.facebook.com/naveenvalkeN"><i class='fa fa-facebook-f'></i></a>
                                    <a href="https://github.com/naveendperera"><i class='fa fa-github-square'></i></a>
                                    <a href=""><i class='fa fa-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="team-item" id="item5">
                            <div class="team-img">
                                <img src="./img/sa.PNG" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Samadhi Vithana</h2>
                                <p>SE,NSBM</p>
                                <div class="team-social">
                                    <a href=""><i class='fa fa-twitter'></i></a>
                                    <a href=""><i class='fa fa-facebook-f'></i></a>
                                    <a href="https://github.com/Sadhii"><i class='fa fa-github-square'></i></a>
                                    <a href="https://www.instagram.com/invites/contact/?i=1j5svpf5bq422&utm_content=39nlr4z"><i class='fa fa-instagram'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


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
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<!-- Template Javascript -->
<script src="./JS/main.js"></script>

</body>

</html>