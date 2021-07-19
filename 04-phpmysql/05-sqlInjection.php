<?php

$email = $_GET['email'] ?? null;
$id = $_GET['id'] ?? 0;

$conn = new mysqli('localhost', 'root', '123456', 'php_mysql_initiating');

// $sql = $conn->multi_query('INSERT INTO users (email) VALUES ("' . $email . '")');

$sql = $conn->query('SELECT * FROM users where id > ' . $id);

$users = $sql->fetch_all(MYSQLI_ASSOC);

foreach($users as $user) {
    echo $user['id'] . ' ' . $user['email'] . '<br>';
}