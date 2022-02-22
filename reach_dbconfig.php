<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reach_details";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>