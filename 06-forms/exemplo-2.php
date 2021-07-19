<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nemail"><br><br>
        <input type="color" name="come" require="require"><br><br>
        <input type="email" name="olor"><br><br>
        <input type="date" name="date"><br><br>
        <input type="file" name="file"><br><br>
        <input type="number" name="number"><br><br>

        <input type="radio" name="radio" value="valor 1"><br>
        <input type="radio" name="radio" value="valor 2"><br>
        <input type="radio" name="radio" value="valor 3"><br>


        <input type="checkbox" name="check" value="checked"><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>