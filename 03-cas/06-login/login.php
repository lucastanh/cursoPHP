<?php 

require __DIR__.'\..\session.php';


// var_dump($_SERVER);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = [
        'email' => filter_input(INPUT_POST, 'email')
    ];

    session_save_path(__DIR__."\..\sessions");

    header('location: index.php');
    exit;
}

?>

<h1>Login</h1>

<form action="" method="POST">
    <input type="text" name='email'>
    <input type="submit" value="enviar">
</form>