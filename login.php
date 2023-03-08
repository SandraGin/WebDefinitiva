<?php
	session_start();
	include ('conexion.php');
	$email = $_POST['email'];
	$contrasena = $_POST ['contrasena'];

	$consulta_login = sprintf("select * from clientes WHERE email='$email' AND contrasena = '$contrasena'");
	$resultado = $conn->query($consulta_login);
	if (mysqli_num_rows($resultado) > 0)  {
	    // Iniciar sesión y redirigir al usuario a la página de inicio
	    $_SESSION['email'] = $email;
// 	   header('Location: index.html');
//	   header("HTTP/1.1 302 Moved Temporarily");
	   header("Location: index.php");
	} else {
	    // Mostrar un mensaje de error si el usuario no existe
	    echo "Correo electrónico o contraseña incorrectos.  <a href='login.html'>vuelva a intenarlo</a>.<br/>";
	}


/*if (mysqli_num_rows($resultado) > 0) {
	// Iniciar sesión y redirigir al usuario a la página de inicio
	$_SESSION['email'] = $email;
	header('Location: index.html');
} else {
	// Mostrar un mensaje de error si el usuario no existe
	echo "Correo electrónico o contraseña incorrectos.";
}*/
?>
