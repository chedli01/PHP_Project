<?php

// Database connection parameters
$servername = "sql.freedb.tech"; 
$username = "freedb_kousay"; 
$password = "zg59aH%ZpNs%WC$"; 
$port = 3306; 
$database = "freedb_ecommercephp"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
return $conn;
?>
