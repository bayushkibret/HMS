<?php
// Database connection parameters
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'hospital_management';

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
