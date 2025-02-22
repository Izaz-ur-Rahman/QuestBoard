<?php
$host = "localhost";
$username = "root";
$password = ""; // Use an empty string for no password in XAMPP
$db = "discuss";

// Remove quotes around variables
$conn = new mysqli($host, $username, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
