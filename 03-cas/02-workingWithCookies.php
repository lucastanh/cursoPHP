<?php

/* A cookie is often used to identify a user. A cookie is a small file that the
server embeds on the user's computer. Each time the same computer requests a page
with a browser, it will send the cookie too. With PHP, you can both create and
retrieve cookie values. */

setcookie("myname", "Lucas", time() + 3600);    // creating
setcookie("myname", "Lucas", time() - 1);       // deleting
setcookie("myname", null, time() - 1);          // deleting

var_dump($_COOKIE);

$_COOKIE['user'] = 'Changed';
