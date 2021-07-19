<?php

$servername = "localhost";
$username = "root";
$password = "123456";

$conn = new mysqli($servername, $username, $password, 'php_mysql_initiating');

if($conn->connect_errno) {
    die('Connection failed: ('. $conn->connect_errno .') ' . $conn->connect_error);
}

// SQL to create an table
$sql = 'CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
)';

echo $conn->query($sql);


// if($conn->query($sql)) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: $conn->error";
// }

// SQL to insert data
$sql = 'INSERT INTO users VALUES (default, "lucas@email.com")';

if($conn->query($sql)) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: $last_id";
} else {
    echo "Error: $sql" . "<br>" .  "$conn->error";
}
