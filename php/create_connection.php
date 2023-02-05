<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataBaseName = "rentalcarexpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dataBaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: \n" . $conn->connect_error);
}
