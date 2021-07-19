<?php

$fname = trim($_POST["fname"]);
$interest = $_POST["interest"] ?? null;
$message = strip_tags($_POST["message"]);

if(empty($fname)) {
    echo "Name is empty.<br>";
}

if(is_null($interest)) {
    echo "Select an Interest";
}

echo $message;

