<?php

session_start();
$_SESSION['csrf_token'] = sha1(rand(1, 20000));

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
    <form action="01-send.php" method="POST"><br>
        <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
        <input name="name" type="text" placeholder="Name"><br>
        <input name="url" type="text" placeholder="Seu site"><br>
        <input name="email" type="email" placeholder="Email"><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <img src="02-captchaimg.php">
        <input type="text" name="_captcha" placeholder="Digite o Captcha" value="">
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>