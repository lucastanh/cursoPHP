<?php

/* 
everything on the internet works under HTTP protocol
HTTP protocol is stateless

cookies are methods to storage data - data can be persists in client
*/

var_dump(session_save_path(__DIR__."\sessions"));

$_SESSION['myName'] = "Lucas";