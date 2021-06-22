<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>

<body>
<section id="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <div>
                    <i class="fa fa-map-marker"></i><span class="form-info"> #75, main street kurunegala </span><br>
                    <i class="fa fa-phone"> </i><span class="form-info"> +37 1234567 </span><br>
                    <i class="fa fa-envelope"></i><span class="form-info"> maneesha@gmail.com</span>
                </div>
                <div>
                    <form action="contact-us.php" method="POST">
                        <input type="text" name="name" placeholder="Enter name" required><br>
                        <input type="Email" name="email" placeholder="Enter Email" required><br>
                        <input type="text" name="subject" placeholder="Enter The subject"><br>
                        <textarea name="message" placeholder="Enter your mrssage here" rows="5" required></textarea><br>
                        <div></div>
                        <!-- <button class="submit">Send Now</button> -->
                        <input type="submit" name="submit" value="Send Now">
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>