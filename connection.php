<?php

$hostName = "localhost";
$username = "root";
$password = "";
$database = "workers_commpany";
$port = "3306";

// Create connection
$conn = new mysqli($hostName, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed to database: " . $conn->connect_error . "<br>");
}
echo "Connected successfully to database" . "<br>";
