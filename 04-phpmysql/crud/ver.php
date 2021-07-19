<?php 

$conn = require 'connection.php';

$stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
$stmt->bind_param('i', $id);

$id = $_GET['id'] ?? null;
$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $user['email'] ?></h1>
    <p>o id deste usuário é <?php echo $user['id'] ?></p>

    <a href="editar.php?id=<?php echo $user['id']; ?>">Edit</a>
    
    <a href="remover.php?id=<?php echo $user['id'] ?>">Remove</a>

    <p><a href="index.php">voltar</a></p>
</body>
</html>