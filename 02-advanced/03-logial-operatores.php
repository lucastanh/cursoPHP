<?php

$a = 2;
$b = 4;
$c = 6;

// Operator AND (and or &&)
if ($b > $a && $b < $a) {
    echo "B is greater then A AND less then C";
}

// Operator OR (or or ||)
if ($b < $a || $c > $b) {
    echo "B is less then A OR C is greater then B";
}

// Operator NOT (!)
if (!false) {
    echo "reverse boolean value";
}