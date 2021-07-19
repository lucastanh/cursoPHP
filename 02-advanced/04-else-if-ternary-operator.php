<?php 

$average = 7;
$recuperation_average = 5;
$frequence = 70;

$student_average = 7;
$student_frequence = 69;

$failed_by_missing = $student_frequence < $frequence ? true : false;

if (!$failed_by_missing) {
    if($student_average < $recuperation_average) {
        echo "Failed by average";
    } else if ($student_average < $average){
        echo "Recuperation";
    } else {
        echo "Approved";
    }

} else {
    echo "Failed by missing.";
}