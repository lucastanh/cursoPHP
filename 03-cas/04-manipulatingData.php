<?php

// session_save_path(__DIR__."\sessions");

require __DIR__.'\session.php';

// $_SESSION['user'] = [
//     "name" => "Lucas",
//     "age" => 20,
//     "active" => true,
//     "rate" => 4.3,
// ];

$_SESSION['user'] = 'asd';
$_SESSION['ultimo-acesso'] = '12-12-2012';
$_SESSION['user-id'] = '3';


// unset($_SESSION["user"]); // deleting a session


// close the browser erases the session