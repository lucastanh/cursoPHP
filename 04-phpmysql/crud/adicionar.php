<?php

$msg_error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    if($email) {
        $conn = require 'connection.php';
        
        $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)');
        $stmt->bind_param('s', $email);

        $stmt->execute();

        $conn->close();
    
        header('location: index.php');
        die();
    } else {
        $msg_error = 'Field cannot be empty.';
    };
}

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
    <h1>Adicionar usuário</h1>

    <form action="" method="POST">
        <input type="text" name="email" >
        <input type="submit" value="Submit">
        <p><?php echo $msg_error; ?></p>
    </form>

    <p><a href="index.php">voltar</a></p>
</body>
</html>