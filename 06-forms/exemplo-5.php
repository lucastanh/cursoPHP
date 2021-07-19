<!-- https://www.php.net/manual/en/function.filter-input.php
https://www.w3schools.com/php/func_filter_input.asp -->

<?php

// fiter_input and filter_input_array

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

    $data = filter_input_array(INPUT_POST); // aplly filter in all elements

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
        <input type="text" name="user[]" placeholder="nome"><br>
        <input type="text" name="user[]" placeholder="idade"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>