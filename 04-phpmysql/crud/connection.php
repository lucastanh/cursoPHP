<?php

$server = 'localhost';
$user = 'root';
$password = '123456';
$db = 'php_mysql_initiating';

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error) {
    die("Connection failed: ($conn->connect_errno) $conn->connect_error");
}

return $conn;
