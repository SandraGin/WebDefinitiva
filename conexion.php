<?php
$servername = "ippublica";
$username = "usuario";
$password = "contraseña$";
$db = "opcion2";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Conexion falla" . $conn->connect_error);

}else
{
//    echo "Conexion exitosa";
}


?>
