<?php

//Example (MySQLi Object-Oriented)
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "php_mysql_initiating";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if($conn->connect_error) {
    die("Connection failed: ($conn->connect_errno) $conn->connect_error");
}

echo $conn->host_info;