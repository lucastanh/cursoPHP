<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $idade = $_POST['idade'] ?? null;

    if(!is_null(($idade))) {
        $idade = (int)$idade;
    } else {
        die('Campo idade não está definido');
    }

    if($idade < 18) {
        die('Idade insuficiente');
    }

    $idade_string = (string)$idade;

    /* 
    * Tipagens
    * (bool)
    * (array)
    * (object)
    * (float)
    */

    var_dump($idade_string, $idade);

    echo "sua idade é $idade";
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
    <form action="" method="POST">
        <input type="text" name="idade" placeholder="idade">
        <input type="submit" value="Enviar">  
    </form>
</body>
</html>