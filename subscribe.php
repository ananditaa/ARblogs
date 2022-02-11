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
if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
}
$Email='';
if (isset($_POST['Email'])) {
    $Email = $_POST['Email'];
}

$sql = "INSERT INTO subscriber_details (Name, Email)
VALUES ('$Name', '$Email')";

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
    <p style="font-family: cursive;font-size: 30px;"> Subscription successful! </p>
    <hr>
    <br>
    <p style="font-family: cursive;font-size: 15px;"> Click anywhere on the image to go back to our blog </p>
    <a href="index.html" target="_blank"> 
        <img src="subscribe-bg.jpg" alt="subscribe success" style="width:50%;"> 
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