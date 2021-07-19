<?php

$id = $_GET['id'];

$conn = require 'connection.php';
$stmt = $conn->prepare('DELETE FROM users WHERE id=?');
$stmt->bind_param('i', $id);
$stmt->execute();

header('location: index.php');
