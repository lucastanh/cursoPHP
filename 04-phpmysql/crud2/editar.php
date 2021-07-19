<?php

$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    if($email) {
        $conn = require 'connection.php';
        $stmt = $conn->prepare('UPDATE users SET email=? WHERE id=?');
        $stmt->bind_param('si', $email, $id);
        $stmt->execute();

        header("location: ver.php?id=$id");
    }
}

$conn = require 'connection.php';
$stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
$stmt->bind_param('i', $id);
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
    <h1>Editar Usuário</h1>
    <form action="" method="POST">
        <input type="text" name="email" value="<?php echo $user['email'] ?>">
        <input type="submit" value="Enviar">
    </form>
    <p><a href="ver.php?id=<?php echo $id ?>">Voltar</a></p>
</body>
</html>