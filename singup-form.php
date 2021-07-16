<?php 
//session_start();

include_once(__DIR__ ."\authentication\connection.php");
include_once(__DIR__ ."/authentication/functions.php");

    if (!isset($_SESSION)) {
        session_start();
    }
     
?>

<?php 
	include_once(__DIR__ .'/authentication/functions.php');
    check_login();

    if(isset($_GET['logout']) )
    {
        session_destroy();
        header("Location: singup-form.php");
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


    <title> Donation.lk - Sign up</title>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./CSS/signup.css" type="text/css">


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
<!--Signup start-->

<div class="signup">
    <div class="container">
        <form action="" method='POST'>
      <h2>Compelet Information.</h2>
      <hr>
      <label for="fname"><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="name" required   > 

      <label for="gender"><b>Gender</b></label>
        <select id="gender" placeholder="select Gender" name="gender" required>
        <option selected disabled value="">Choose...</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
         </select>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Adress" name="adress" required   >

      <label for="province"><b>Province</b></label>
      <select id="province" placeholder="select Provinc" name="province" required>
      <option selected disabled value="">Choose...</option>
        <option value="Central">Central</option>
        <option value="Eastern">Eastern</option>
        <option value="North-Central">North Central</option>
        <option value=" Northernl"> Northern</option>
        <option value="North-Western">North Western</option>
        <option value="Sabaragamuwa">Sabaragamuwa</option>
        <option value="Southern">Southern</option>
        <option value="Uva">Uva</option>
        <option value="Western">Western</option>
     </select>

      <label for="id"><b>Identy Number</b></label>
      <input type="text" placeholder="ID Number" name="id" required  >

      <label for="pnum"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Phone Number" name="pnum" required   >

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required  >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required   >

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" required   >
  

      <p>By creating an account you agree to our <a href="Terms-and-condition.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <div class="sign-up-submit"></div>
      <div class="clearfix" id="signupsumbmit">
        <input  type="submit"   class="cancelbtn" value="Sign up" />
      </div>
      <a href="login.php" style="color:dodgerblue " >Click to Login</a><br><br>
    </div>
    </div>
    <?php //print_r($_POST); ?>              
                    <?php
    /*Array ( [user_name] => maneesha 
    [gender] => Male 
    [adress] => No.184, Samanabedda, 
    [province] => Central 
    [id] => 20836 
    [pnum] => 0769214847 
    [email] => yasiru9999@gmail.com 
    [password] => aaaaasa 
    psw-repeat] => asas [remember] => on )
*/
if($_SERVER['REQUEST_METHOD'] == "POST")
{
                    
                    if(isset($_POST['name']) && 
                    isset($_POST['email']) && 
                    isset($_POST['gender']) && 
                    isset($_POST['adress']) && 
                    isset($_POST['province']) && 
                    isset($_POST['pnum']) && 
                    isset($_POST['id']) && 
                    isset($_POST['password'])){
                        $con = connection();
                        
                        $name = mysqli_real_escape_string($con , $_POST['name']);
                        $email = mysqli_real_escape_string($con , $_POST['email']) ; 
                        $gender = mysqli_real_escape_string($con , $_POST['gender']); 
                        $adress = mysqli_real_escape_string($con , $_POST['adress']);
                        $province = mysqli_real_escape_string($con , $_POST['province']);
                        $pnum = mysqli_real_escape_string($con , $_POST['pnum']);
                        $id = mysqli_real_escape_string($con , $_POST['id']);
                        $password = mysqli_real_escape_string($con , $_POST['password']);

                        if(check_existingEmail($email))
                        {
                            echo '<span class="success-msg">The Email Address Allready registerd</span>';
                        }
                        else {
                            if(create_user($name,$email,$gender,$adress,$province,$pnum,$password,$id))
                            {
                                echo '<div class="container">
                                    <span class="success-msg1">registation Successed</span>
                                    </div>';

                            }
                            else {
                            echo '<div class="container"><span class="error-msg">Somthing Wrong</span> </div>';

                            }
                        }

 
                }
            }
                    ?>
  </form>
</div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
<!--Signup end-->



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
                <a href="Index.php"> <img src=./img/Untitled-2.png" alt="Icon"></a>
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