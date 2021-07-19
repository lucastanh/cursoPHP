<?php

// trim, stripeslashes, htmlspecialchars

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'] ?? null;
    $nome = trim($nome); // remove spaces
    $nome = stripslashes($nome); // remove slashes
    $nome = htmlspecialchars($nome, ENT_NOQUOTES); // remove scripts

    echo $nome;
}
/* 
 * < => &lt
 * > => &gt
 * " => &quote
 * ' => &#039
 * & => &amp
*/


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
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>