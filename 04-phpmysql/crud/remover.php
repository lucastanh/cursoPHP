<?php 

$conn = require 'connection.php';

$stmt = $conn->prepare('DELETE FROM users WHERE id=?');
$stmt->bind_param('i', $id);

$id = $_GET['id'] ?? null;
$stmt->execute();

$conn->close();

header('location: index.php');

