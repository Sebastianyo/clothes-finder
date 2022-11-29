<?php
$servername = "localhost";
$database = "proyecto";
$username = "root";
$password = "";

$conex = mysqli_connect($servername, $username, $password, $database);

if (!$conex) {
    die("conexion fallida: " . mysqli_connect_error());
}
echo "";

?>