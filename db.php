<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful (no message needed)
?>
