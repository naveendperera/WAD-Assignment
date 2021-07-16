<?php
    require('./database_post_don.php');
    
    $query_don_type = 'select * from donation_type;';
    $statement_don_type = $db->prepare($query_don_type);
    $statement_don_type->execute();
    $don_type_table = $statement_don_type->fetchAll();
    $statement_don_type->closeCursor();

    $query_province = 'select * from province;';
    $statement_province = $db->prepare($query_province);
    $statement_province->execute();
    $province_table = $statement_province->fetchAll();
    $statement_province->closeCursor();

?>
<?php 
session_start(); 
	include_once(__DIR__ .'/authentication/functions.php');
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: Postad.php");
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

        <title> Donation.lk - Post Ad</title>
        <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/Style-Post-ad.css.css" type="text/css">
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
<div class="post-ad-d">
<div class="p-donation">
    <h2>Post Your Donation</h2>
</div>

<form action="postDonScript.php" method="POST">
<div class="form-ad">
    <div class="sel-catogory">
        <label for="formGroupExampleInput" class="form-label">Select type of donation</label>
        <div class="input-group mb-3">
          <select class="form-select " id="validationServer04" aria-describedby="" name="donation_type" required>
            <option selected disabled value="">Choose...</option>
            <?php foreach($don_type_table as $don_type_record):?>
                <option value="<?php echo $don_type_record['donation_type_id']?>"><?php echo $don_type_record['donation_type_name']?></option>
            <?php endforeach?>
          </select>
          </div>
    </div>
</div>


<div class="title">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keep it short!" name="donation_title">
      </div>
</div>


<div class="des-ad">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Description</label>
    <textarea class="form-control " id="validationTextarea" placeholder="Required more details about your donation" name="donation_desc" required></textarea>
  </div>
</div>

<div class="Contact-d">
    <h5>Contact details</h5>
    <div class="row g-3">
        <div class="col-md-4">
          <label for="validationServer01" class="form-label">First name</label>
          <input type="text" class="form-control is-valid" id="validationServer01" value="" name="donation_fname" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Last name</label>
          <input type="text" class="form-control is-valid" id="validationServer02" value="" name="donation_lname"  required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="donation_address" placeholder="1234 Main St">
          </div>
        <div class="col-md-6">
          <label for="validationServer03" class="form-label">City</label>
          <input type="text" class="form-control" id="validationServer03" placeholder="Colombo" aria-describedby="" name="donation_city" required>
            <!--Please provide a valid city.-->
        </div>
        <div class="col-md-3">
          <label for="validationServer04" class="form-label">Province</label>
          <select class="form-select " id="validationServer04" aria-describedby="" name="donation_province" required>
            <option selected disabled value="">Choose...</option>
            <?php foreach($province_table as $province_record):?>
                <option value="<?php echo $province_record['province_id']?>"><?php echo $province_record['province_name']?></option>
            <?php endforeach?>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationServer05" class="form-label">Contact Number</label>
          <input type="text" class="form-control " id="validationServer05" aria-describedby="validationServer05Feedback"  name="donation_telephone" required>
        </div>
        
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
              <p>By creating an account you agree to our <a href="Terms-and-condition.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
            </label>
          </div>
        </div>
        
        <div  id="sub-bt">
          <button class="btn btn-primary" type="submit" >Submit form</button>
        </div>  
</div>
</form>
</div>
<br><br>

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