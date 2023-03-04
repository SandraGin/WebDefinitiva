<?php
include ('conexion.php');
$email = $_POST['email'];
$contrasena = $_POST ['contrasena']

$consulta_login = "select * from clientes where email = '$email' AND contrasena = '$contrasena'";
debug ($consulta_login)
?>