<?php
session_start();
include ('conexion.php');
$email = $_POST['email'];
$contrasena = $_POST ['contrasena'];

$consulta_login = "select * from clientes where email = '$email' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta_login);
if (mysqli_num_rows($resultado) > 0) {
	// Iniciar sesión y redirigir al usuario a la página de inicio
	$_SESSION['email'] = $email;
	header('Location: index.html');
} else {
	// Mostrar un mensaje de error si el usuario no existe
	echo "Correo electrónico o contraseña incorrectos.";
}
?>
