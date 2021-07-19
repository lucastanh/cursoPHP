<?php

$server = 'localhost';
$user = 'root';
$passwd = '123456';
$db = 'php_mysql_initiating';

$conn = new mysqli($server, $user, $passwd, $db);

if($conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}

return $conn;