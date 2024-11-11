<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'phprs');
define('DB_NAME', 'phprs');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect("db", "root", "phprs");
 
// Check connection
if($link === false){
    die("ERRO: Nao foi possivel conectar. " . mysqli_connect_error());
}
?>
