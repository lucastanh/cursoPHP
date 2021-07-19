<?php

$servername = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'php_mysql_initiating';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}

$sql = 'SELECT * FROM users';
$result = $conn->query($sql);


// 1 method
$users = $result->fetch_all(MYSQLI_ASSOC);
// foreach($users as $user) {
//     echo "<li>Id: {$user['id']} - Email: {$user['email']} </li>";
// }


// 2 method
// if($result->num_rows > 0) {

//     echo '<ul>';

//     // output data for each row
//     while($row = $result->fetch_assoc()) {
//         echo "<li>Id: {$row['id']} - Email: {$row['email']} </li>";
//     };

//     echo '</ul>';

// } else {
//     echo "0 results.";
// }