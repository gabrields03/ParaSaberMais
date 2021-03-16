<?php

$host = "localhost";
$username = "root";
$password = "ga012176";
$dbname = "registro";

// Estabelecendo conexão com OO
$conn = new mysqli($host, $username, $password, $dbname);

// Confere sucesso da conexão
if ($conn->connect_error) {
    die("Problemas ao conectar: " . $conn->connect_error);
}

?>