<?php 

$conn = require 'connection.php';

$save = true;

$conn->query('TRUNCATE users');
$conn->query('TRUNCATE likes');

$sql = file_get_contents(__DIR__.'/insert_likes.sql');
$sql2 = file_get_contents(__DIR__.'/insert_users.sql');

$conn->begin_transaction();
$conn->query($sql);
$conn->query($sql2);

if($save) {
    $conn->commit();
} else {
    $conn->rollback();
}
 
echo 'START SELECT' . PHP_EOL;

$result = $conn->query('SELECT * FROM likes');

$likes= $result->fetch_all(MYSQLI_ASSOC);

var_dump($likes);

echo 'END SELECT' . PHP_EOL;
