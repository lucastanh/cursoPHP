<?php

session_start();

include '01-crsf.php';
include '02-captcha.php';
include '01-get_data.php';


// \ escape
// ^ inicio
// $ fim
// . qualquer caracter
// * 0 ou mais
// + 1 ou mias
// {n, m} minimo, maximo
// [a-zA-z] intervalo

