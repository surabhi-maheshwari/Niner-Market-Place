<?php
$servername = "localhost";
$username = "root";
$password = "cool272";
$db_name = "marketplace";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "mysqli Connected successfully";
?>