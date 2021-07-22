<?php

session_start();

include '01-crsf.php';
// include '02-captcha.php';
include '01-get_data.php';

// REGEX
// \ escape
// ^ inicio
// $ fim
// . qualquer caracter
// * 0 ou mais
// + 1 ou mais
// {n, m} minimo, maximo
// [a-zA-z] intervalo

$url = filter_input(INPUT_POST, 'url');
$pattern = '//';

var_dump(preg_match($pattern, $url), $url);