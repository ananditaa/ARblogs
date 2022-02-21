<!DOCTYPE html>
<html>
<head>
  <title>View Comments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <h2>Comments</h2>
<style>
   div {
      background-color: linear-gradient(130deg,#21a9af,#172a74);
      border: 3px solid white;
      padding: 50px;
      margin: 20px;
      float: left;
      overflow-wrap: break-word;
      width: 50em;      
      word-wrap: break-word;      
       
   }
   p { 
      word-break: break-all 
   }



body {
    background:linear-gradient(130deg,#21a9af,#172a74);
}

</style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subscribe_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT c_name, c_comment FROM comment_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
<body>
   
   <div>
      <img src="comment_profile.png" alt="Avatar" style="width:90px">
      <br>
      <br>
      <p style="font-family: Comic sans-serif;font-size: 20px;color: white;"><span><?php echo "Name: " . $row["c_name"]."<br>";?></span></p>
      <p style="font-family: Comic sans-serif;font-size: 20px;color: white;"><?php echo "Comment: " . $row["c_comment"]."<br>";?></p>
   </div>

</body>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>