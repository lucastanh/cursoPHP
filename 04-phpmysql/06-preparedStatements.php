<?php

$id = $_GET['id'] ?? 0;
$id2 = $_GET['id2'] ?? 4;

$conn = new mysqli('localhost', 'root', '123456', 'php_mysql_initiating');

$stmt = $conn->prepare('SELECT * FROM users where id > ? and id < ?');

/* 
* i = integer
* s = string
* b = blobl
* d = double
*/
$stmt->bind_param('ii', $id, $id2);
$stmt->execute();

$result = $stmt->get_result();

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach($users as $user) {
    echo $user['id'] . ' ' . $user['email'] . '<br>';
}

$stmt->close();
$conn->close();