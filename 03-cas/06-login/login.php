<?php 

require __DIR__.'\..\session.php';

var_dump($_SESSION);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = [
        'name' => filter_input(INPUT_POST, 'name'),
        'email' => filter_input(INPUT_POST, 'email')
    ];

    header('location: index.php');
    exit;
}

?>

<h1>Login</h1>

<form action="" method="POST">
    <input type="text" name='name' placeholder="name">
    <input type="text" name='email' placeholder="email">
    <input type="submit" value="enviar">
</form>