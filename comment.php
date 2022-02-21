<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subscribe_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$c_name='';
$c_comment='';
if (isset($_POST['c_name'])) {
    $c_name = $_POST['c_name'];
}
if (isset($_POST['c_comment'])) {
    $c_comment = $_POST['c_comment'];}
$sql = "INSERT INTO comment_table (c_name, c_comment)
VALUES ('$c_name', '$c_comment')";

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
         <p style="font-family: cursive;font-size: 30px;"> Thanks for your feedback! </p>
         <hr>
         <br>
         <p style="font-family: cursive;font-size: 15px;"> Click anywhere on the image to read the comments </p>
         <a href="comment_display.php" target="_blank"> 
            <img src="comment-bg.png" alt="subscribe success" style="width:33%;"> 
         </a>
      </div>
   </body>
   </html> 
<?php 
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if (empty($_POST['c_name'])) {
    die("Name is empty!");
}
if (empty($_POST['c_comment'])) {
    die("Email is empty!");
}

$conn->close();
?>
  