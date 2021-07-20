<?php

$str = "123aaA_";
$pattern = "/[a-zA-Z_*]/";

echo preg_match_all($pattern, $str);