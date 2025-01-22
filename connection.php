<?php

$hostName = "localhost";
$username = "root";
$password = "";
$database = "company";
$port = "3306";

// Create connection
$conn = new mysqli($hostName, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
