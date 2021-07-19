<?php

session_set_cookie_params(60*60*24*365, '/', null, false, true);

session_save_path(__DIR__."\sessions");

session_start();