<!-- This is my database -->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "myZoo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
?>