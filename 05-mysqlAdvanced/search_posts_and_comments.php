<?php 

$conn = require 'connection.php';

$one_to_one = 'SELECT *, count(a.id) FROM posts a LEFT JOIN comments b ON a.id = b.post_id WHERE a.id = 1 GROUP BY a.id';
$one_to_many = 'SELECT * FROM posts a LEFT JOIN comments b ON a.id = b.post_id WHERE a.id = 1';
$belong_to = 'SELECT * FROM posts a RIGHT JOIN comments b ON a.id = b.post_id WHERE b.id = 1';
$belong_to_2 = 'SELECT * FROM comments a RIGHT JOIN posts b ON a.post_id = b.id WHERE a.id = 1';

$result = $conn->query($belong_to);

$posts = $result->fetch_all(MYSQLI_ASSOC);

var_dump($posts);
exit;