<?php

define('HOST'    , 'localhost');
define('USERNAME', 'root')     ;
define('PASSWORD', 'ga012176') ;
define('DBNAME'  , 'registro') ;

// Estabelecendo conexão com OO
$conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

// Confere sucesso da conexão
if ($conn->connect_error) {
    die("Problemas ao conectar: " . $conn->connect_error);
}else{
}
?>