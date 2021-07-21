<?php 

$captcha = $_SESSION['captcha'] ?? false;

var_dump($captcha);

if(!$captcha || $captcha !== filter_input(INPUT_POST, '_captcha')) {
    die('Captcha validation fail');
}