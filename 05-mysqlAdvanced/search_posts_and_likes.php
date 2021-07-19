<?php 

$conn = require 'connection.php';

$sql = 'SELECT * FROM likes l 
        INNER JOIN users u ON l.user_id = u.id
        INNER JOIN posts p ON l.post_id = p.id'
;

$result = $conn->query($sql);

$posts = $result->fetch_all(MYSQLI_ASSOC);

var_dump($posts);
exit;