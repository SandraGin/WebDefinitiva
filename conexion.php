<?php
$servername = "dbproyectofinal.cub76rsfz6aw.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Root1234$";
$db = "opcion2";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Conexion falla" . $conn->connect_error);

}else
{
//    echo "Conexion exitosa";
}


?>
