<?php
    $donation_type_id = filter_input(INPUT_GET, 'don_type_id',FILTER_VALIDATE_INT);

    if(($donation_type_id === FALSE) || ($donation_type_id < 1) || ($donation_type_id > 8)){
        header("Location: ./Service.php");
        exit();
    }

    $no_result_str = "";

    require('./database_post_don.php');

    $query_results="select table1.donation_title, table1.donation_desc, table1.donation_fname, table1.donation_lname, table1.donation_address, table1.donation_city, table1.donation_telephone, province.province_name from (select * from donations where donation_type_id = :d_type_id) as table1 inner join province on table1.donation_province_id = province.province_id;";
    $statement_results = $db->prepare($query_results);
    $statement_results->bindValue(':d_type_id', $donation_type_id);
    $statement_results->execute();
    $results_table = $statement_results->fetchAll();
    $statement_results->closeCursor();

    $query_don_type = "select donation_type_name from donation_type where donation_type_id = :d_type_id";
    $statement_don_type = $db->prepare($query_don_type);
    $statement_don_type->bindValue(':d_type_id', $donation_type_id);
    $statement_don_type->execute();
    $donation_type = $statement_don_type->fetch();
    $statement_don_type->closeCursor();

    if($results_table == FALSE){
        $no_result_str = 'Sorry there are no donations under the ' . $donation_type['donation_type_name'] . ' catergory at the moment. Please try again later.';
    }
?>

<?php 
session_start(); 
	include_once(__DIR__ .'/authentication/functions.php');
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: serviceAds.php");
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

        <title> Donation.lk - Education</title>
        <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/Education.css" type="text/css">
    <link rel="stylesheet" href="./CSS/style-card.css" type="text/css">
    </head>

<body>
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

<!--strat Detais post ad-->
<div class="Education" >
    <div class="container">
        <h2><?php echo $donation_type['donation_type_name']?></h2>
    </div>
    <div>
        <p><?php echo $no_result_str?></p>
    </div>
        <?php foreach($results_table as $results_record):?>
            <div class="row">
                <div class="col card mb-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $results_record['donation_title']?></h5>
                        <p class="card-text lead"><?php echo $results_record['donation_desc']?></p>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo $results_record['donation_fname'] . " " . $results_record['donation_lname']?><br><br>
                            <?php echo $results_record['donation_address']?><br>
                            <?php echo $results_record['donation_city']?><br>
                            <?php echo $results_record['province_name']?><br><br>
                            Contact Number: <?php echo $results_record['donation_telephone']?><br>
                        </h6>
                    </div>
                </div>
            </div>
        <?php endforeach?>
    
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