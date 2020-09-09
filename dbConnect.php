<?php
$servername = "terrylinda1379278.ipagemysql.com";
$username = "272user1";
$password = "272user1";
$dbname = "272database";

$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  //echo "Connected successfully";
?>