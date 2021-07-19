<?php 

require __DIR__.'\session.php';

// session_destroy(); // destroy the session

unset($_SESSION['user-id']); // remove all session variables

// $_SESSION['user-id'] = null;