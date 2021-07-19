<?php 

$conn = require 'connection.php';

$term = $argv[1] ?? null; // valor 0 é o nome do arquivo 
$term = '%'.$term.'%';

$stmt = $conn->prepare('SELECT * FROM posts WHERE body LIKE ?');
$stmt->bind_param('s', $term);

$stmt->execute();

$result = $stmt->get_result();
$posts = $result->fetch_all(MYSQLI_ASSOC);

foreach($posts as $post) {
    echo $post['title'].PHP_EOL;
    echo $post['body'].PHP_EOL;
    echo PHP_EOL;
};