<?php 

$conn = require 'connection.php';
$stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
$stmt->bind_param('i', $id);

$id = $_GET['id'];
$stmt->execute();

$result = $stmt->get_result();

$conn->close();

$user = $result->fetch_assoc();
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
    <p>O id deste usuário é <?php echo $user['id'] ?></p>

    <p>
        <a href="editar.php?id=<?php echo $user['id'] ?>">Editar</a>
        <a href="deletar.php?id=<?php echo $user['id'] ?>">Deletar</a>
    </p>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>