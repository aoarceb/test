<?php
$servername = "localhost";
$username = "demo";
$password = "demo";
$dbname = "rest_api_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, user_email)
VALUES ('".$_GET['username']."','".$_GET['email']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>