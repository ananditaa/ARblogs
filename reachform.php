<?php 

include 'https://ananditaa.github.io/ARblogs/reach_dbconfig.php';

error_reporting(0);

if (isset($_POST['submit'])) { 
    $reach_name = $_POST['reach_name']; 
    $reach_email = $_POST['reach_email']; 
    $reach_mssg = $_POST['reach_mssg']; 


    $sql = "INSERT reach_details (reach_name,reach_email,reach_mssg)
            VALUES ('$reach_name', '$reach_email','$reach_mssg')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('We received your message!')</script>";
    } else {
        echo "<script>alert('There was a problem in sending the message :(')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <!-- ----------bootstrap-------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    
    <!-- ----------FONT-------- -->
    <link href='https://fonts.googleapis.com/css?family=Dekko' rel='stylesheet'>
    <!-- -------Google Fonts---------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Merriweather&family=Montserrat&family=Playfair+Display:wght@400;900&family=Poppins:wght@400;600;800&family=Roboto:wght@300;500&family=Rowdies:wght@700&family=Sacramento&display=swap" rel="stylesheet">

    <!-- ---------Font Awesome----------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- ----------CSS-------- -->
    <link rel="stylesheet" href="https://ananditaa.github.io/ARblogs/nav-reach-style.css">

    <!-- -----------Custom CSS-------------- -->
    <link rel="stylesheet" href="https://ananditaa.github.io/ARblogs/reachstyle.css">

    <title>Reach out to us</title>
</head>
<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    <a class="navbar-brand" href="https://ananditaa.github.io/ARblogs/index.html">
                        <div class="logo-image">
                            <img src="https://ananditaa.github.io/ARblogs/logo.jpg" class="img-fluid">
                        </div>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span
                        class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="https://ananditaa.github.io/ARblogs/reach.html">Reach Out to Us</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="https://ananditaa.github.io/ARblogs/aboutus.html">About Us</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form>
                        <a class="btn btn-light action-button" role="button" href="https://ananditaa.github.io/ARblogs/subscribeform.php">Subscribe</a>
                    </div>
                </div>
            </nav>
            <div class="container-reach">
                <div class="heading-text">
                    <h3>Reach Out to us</h3>
                    <p>We were waiting for your reviews! <br>Show some love people &hearts;</p>
                </div>
                <div class="contact-form">
                    <form action="" method="POST">
                        <div class="field">
                            <div class="field-item">
                                <label for="reach_name">
                                    <i class="fas fa-user"></i>
                                    <span> Full name</span>
                                </label>
                                <input type="text" name="reach_name" id="reach_name" required>
                            </div>
                            <div class="field-item">
                                <label for="reach_email" ><i class="fas fa-envelope"></i><span> Email</span></label>
                                <input type="text" name="reach_email" id="reach_email" required>
                            </div>
                        </div>
                        <div class="field-text">
                            <label for="reach_mssg" class="label2"><i class="fas fa-comments"></i><span> Message us here</span></label>
                            <textarea name="reach_mssg" id="reach_mssg" required></textarea>
                        </div>
                        <div class="submit-btn">
                            <button name="submit" type="submit" class="btn-s">Submit <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; ARblogs 2022. All Rights Reserved.</p>
        <p>Made with &hearts; in India.</p>
    </div>
        
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    


</body>
</html>
