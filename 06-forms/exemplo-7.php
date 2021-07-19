<!-- https://www.php.net/manual/en/function.filter-var.php -->

<?php

// extract and compact

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);

    var_dump($nome, $idade);

    $data = compact('nome', 'data', '_POST');

    var_dump($data);
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
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="idade" placeholder="idade">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>