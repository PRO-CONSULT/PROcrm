<?php
$servername = "localhost";
$username = "root";
$password = "002060";
$db = "procrm";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 