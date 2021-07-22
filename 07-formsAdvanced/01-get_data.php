<?php 

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$description = filter_input(INPUT_POST, 'description');

// var_dump('--FORM-DATA--', $name, $email, $description);

$json = file_get_contents("php://input");
$json = json_decode($json);

// var_dump('--JSON--', $json);

if(is_null($name)) {
    $name = $json->name ?? null;
}

if(is_null($email)) {
    $email = $json->email ?? null;
}

if(is_null($description)) {
    $description = $json->description ?? null;
}

// var_dump('--FINAL--', $name, $email, $description);
