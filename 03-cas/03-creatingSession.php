<?php

session_save_path(__DIR__."\sessions");

require __DIR__.'\session.php'; // start the session

$_SESSION['myName'] = "Lucas";