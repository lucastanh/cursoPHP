<?php 

require __DIR__.'\session.php';

// session_destroy(); // destroy the session

// unset($_SESSION['myName']); // remove all session variables

$_SESSION['myName'] = null;