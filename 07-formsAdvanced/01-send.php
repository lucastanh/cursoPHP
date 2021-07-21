<?php 

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$description = filter_input(INPUT_POST, 'description');

var_dump($name, $email, $description);