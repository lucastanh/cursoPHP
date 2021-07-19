<?php 

$conn = require '01-connection.php';

$conn->query('DROP TABLE users');
$conn->query('DROP TABLE likes');

$sql = '
    CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL
    )    
';

if(!$conn->query($sql)) {
    die("ERROR: $conn->error");
}

$sql = '
    CREATE TABLE likes(
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id VARCHAR(50) NOT NULL,
        post_id TEXT NOT NULL
    )    
';

if(!$conn->query($sql)) {
    die("ERROR: $conn->error");
}

echo 'START SELECT' . PHP_EOL;

$result = $conn->query('SELECT * FROM likes');

$likes = $result->fetch_all(MYSQLI_ASSOC);

echo 'END SELECT' . PHP_EOL;
