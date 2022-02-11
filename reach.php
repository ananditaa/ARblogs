<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subscribe_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Name='';
if (isset($_POST['reach_name'])) {
    $reach_name = $_POST['reach_name'];
}
$Email='';
if (isset($_POST['reach_email'])) {
    $reach_email = $_POST['reach_email'];
}
if (isset($_POST['reach_mssg'])) {
    $reach_mssg = $_POST['reach_mssg'];
}
$sql = "INSERT INTO reach_details (reach_name,reach_email,reach_mssg)
VALUES ('$reach_name', '$reach_email', '$reach_mssg')";

if ($conn->query($sql) === TRUE) {?>
    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}
img{
    border-radius: 50%;
}

</style>
</head>
<body style="background:linear-gradient(130deg, #21a9af,#172a74);">

<div class="container">
    <br>
    <hr>
    <p style="font-family: cursive;font-size: 30px;">  We have received your message! We will get back to you soon :) </p>
    <hr>
    <br>
    <p style="font-family: cursive;font-size: 15px;"> Click anywhere on the image to go back to our blog </p>
    <a href="https://github.com/ananditaa/ARblogs/index.html" target="_blank"> 
        <img src="https://github.com/ananditaa/ARblogs/subscribe-bg.jpg" alt="subscribe success" style="width:50%;"> 
    </a>
  
  
</div>

</body>
</html> 
<?php 
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if (empty($_POST['Name'])) {
    die("Name is empty!");
}
if (empty($_POST['Email'])) {
    die("Email is empty!");
}

$conn->close();
?>
