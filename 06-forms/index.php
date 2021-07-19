<?php

// super variable REQUEST

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
    var_dump($_GET);
    var_dump($_REQUEST);
    // var_dump(filter_input(INPUT_REQUEST, 'page')); // não funciona
};

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
    <form action="index.php?page=sobre-nos" method="POST">
        <input type="text" name="nome">
        <input type="submit" value="Enviar"> 
    </form>

</body>
</html>