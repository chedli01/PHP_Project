<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "123456"; // Assuming no password is set
$database = "eCommercePHP"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   