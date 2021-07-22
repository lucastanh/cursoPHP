<?php
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

$pattern = '/w{0,3}\.[a-z]+\.[a-z]+[\.a-z]*$/';

if(preg_match($pattern, $url, $matches)) {
    $url = $matches[0];
} else {
    die("URL is invalid");
}

var_dump($url);