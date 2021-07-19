<?php

// var_dump($_GET);

$fname = isset($_GET['name']) ? $_GET['name'] : false;

if($fname) {
    echo $fname;
} else {
    echo "Name is not defined";
}
echo "<br>";

// coalesce
// $lname = $_GET['cor'] ?? "Last name is not defined.";

// echo $lname;