<?php

/* Persistent connection - conexão que persiste, depois que a aplicação acontece,
que a requisição chama um arquivos, os arquivos são executados e o PHP ou o SQL
terminam todas suas tarefas a conexão deve ser finalizada, com a conexão persistente ligada
essa conexão não é finalizada, ela continua ativa.
*/

// changing the ini.dll
ini_set('mysqli.allow_persistent', 'on');
ini_set('mysqli.max_links', -1); // -1 is ilimited


//Example (MySQLi Object-Oriented)
$servername = "localhost";
$username = "root";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_errno) {
    die("Connection failed: ($conn->connect_errno) $conn->connect_error");
}

echo $conn->host_info;

$conn->close();
