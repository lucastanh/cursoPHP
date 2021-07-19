<?php 

$conn = require '01-connection.php';

$sql = '
    CREATE TABLE posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        body TEXT NOT NULL,
        FULLTEXT KEY title (title, body)
    )
';

if(!$conn->query($sql)) {
    die("ERROR: $conn->error");
}

// $result = $conn->query('DESC posts');

// var_dump($result->fetch_all());