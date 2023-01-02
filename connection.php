<?php

$servername = "localhost";
$username = "ashik113";
$password = "fbGN0Hqq)m/GQ]7D";
$dbname = "hoteldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>