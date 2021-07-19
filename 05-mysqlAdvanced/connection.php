<?php 

$debug = false;

if($debug) {
    /* 
    * MYSQLI_REPORT_ERROR
    * MYSQLI_REPORT_OFF
    * MYSQLI_REPORT_STRICT
    * MYSQLI_REPORT_INDEX
    * MYSQLI_REPORT_ALL
    */

    mysqli_report(MYSQLI_REPORT_ERROR);
} else {
    mysqli_report(MYSQLI_REPORT_OFF);
}



$conn = new mysqli('localhost', 'root', '123456', 'php_mysql_advancing');

if($conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}

return $conn;