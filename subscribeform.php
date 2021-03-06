<?php 

include 'https://ananditaa.github.io/ARblogs/comment_dbconfig.php';

error_reporting(0);

if (isset($_POST['s_submit'])) { 
    $Name = $_POST['Name']; 
    $Email = $_POST['Email']; 

    $sql = "INSERT subscriber_details (Name,Email)
            VALUES ('$Name', '$Email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Subscription successfull.')</script>";
    } else {
        echo "<script>alert('Subscription not successfull.')</script>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <!-- ----------bootstrap-------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <!-- ----------CSS-------- -->
    <link rel="stylesheet" href="https://ananditaa.github.io/ARblogs/style.css">
    <link rel="stylesheet" href="https://ananditaa.github.io/ARblogs/subscribe.css">
    <!-- ----------FONT-------- -->
    <link href='https://fonts.googleapis.com/css?family=Dekko' rel='stylesheet'>
    
    <!-- -----------Google Fonts--------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Merriweather&family=Montserrat&family=Playfair+Display:wght@400;900&family=Poppins:wght@400;600;800&family=Roboto:wght@300;500&family=Rowdies:wght@700&family=Sacramento&display=swap" rel="stylesheet">

    <!-- -----------Font Awesome------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
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
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="https://ananditaa.github.io/ARblogs/reachform.php">Reach Out to Us</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="https://ananditaa.github.io/ARblogs/aboutus.html">About Us</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form>
                        <a class="btn btn-light action-button" role="button" href="https://ananditaa.github.io/ARblogs/subscribeform.php">Subscribe</a>
                    </div>
                </div>
            </nav>
            <form action="https://ananditaa.github.io/ARblogs/subscribe.php" method="POST">
                <!--Div for Background-->
                <div class="bg text-center">
                    <!--Div for Centered Text & Input-->
                    <div class="centered">
                        <p class="firstLine"> S &nbsp; U &nbsp; B &nbsp; S &nbsp; R &nbsp;  I &nbsp; B &nbsp; E </p>
                        <p class="secondLine">Stay in touch with us!</p>
                        <p> <input class="InputStyle" placeholder="Enter your name &#9893; " style="font-family:Arial, FontAwesome" type="text" name="Name" id="Name"> </p>
                        <p> <input class="InputStyle" placeholder="Enter your email address &#xf0e0; " style="font-family:Arial, FontAwesome" type="email" name="Email" id="Email"> </p>
                        <br>
                        <button name="submit" type="submit" class="btn btn-light action-button btn-bottom-margin" >Submit</button>
                    </div>
                </div>
            </form>
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
