<?php

var_dump($_POST);

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$interest = $_POST["interest"];
$where_meet = $_POST["where_meet"];
$message = $_POST["message"];

echo "<strong>First Name: </strong>" . $fname . "<br>";
echo "<strong>Last Name: </strong>" . $lname . "<br>";
echo "<strong>Email: </strong>" . $email . "<br>";

echo "<strong>Interests: </strong><br>";
echo "<ul>";
foreach($interest as $int) {
    echo "<li>$int</li>";
}
echo "</ul>";

echo "<strong>Where meet: </strong>" . $where_meet . "<br>";
echo "<strong>Message: </strong>" . $message . "<br>";
