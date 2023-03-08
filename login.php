<?php
	session_start();
	include ('conexion.php');
	$email = $_POST['email'];
	$contrasena = $_POST ['contrasena'];

	$consulta_login = sprintf("select * from clientes WHERE email='$email' AND contrasena = '$contrasena'");
	$consulta_admin = sprintf("select * from administrador WHERE email='$email' AND contrasena = '$contrasena'");
	$resultado = $conn->query($consulta_login);
	$resultadoadmin = $conn->query($consulta_admin);
	if (mysqli_num_rows($resultado) > 0)  {
	    // Iniciar sesión y redirigir al usuario a la página de inicio
	    $_SESSION['email'] = $email;
	//if(isset)
	   header("Location: index.php");
	} 
	elseif (mysqli_num_rows($resultadoadmin) > 0){
	    $_SESSION['email'] = $email;
		header ("Location: subirproducto.php");
	}
	else {
	    // Mostrar un mensaje de error si el usuario no existe
	    echo "Correo electrónico o contraseña incorrectos.  <a href='login.html'>vuelva a intenarlo</a>.<br/>";
	}
	

?>
