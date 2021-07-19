<?php

$string = 'abcdefghijklmno
pqrstuvwxyz';

$name = 'Lucas';
$last = 'Castanheiro';
$fullName = $name . " " . $last;


echo $name . ' ' . $last; // use the '.' to concatenate strings
echo "\n";
echo $fullName;

echo "\n";
echo "$name $last";
echo "\n";
echo '$name $last';
