<!DOCTYPE html>
<html lang="es">
<head>
   <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<div class='container'>
<?php


	include('conexion.php');
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$dir=$_POST['dir'];
	$tlf=$_POST['tlf'];
	$edad= $_POST['edad'];
	$contrasena = $_POST['contrasena'];
	$email = $_POST['email'];

	$sql = "INSERT INTO clientes values (null,'$nombre','$apellidos','$dir','$tlf','$edad','$contrasena','$email')";

	$insertar=mysqli_query($conn,$sql);

	   if ($insertar) {
	echo "<p class='controls' style = 'color:white; text-align:center;'>Usuario registrado correctamente<a href='index.html'> Volver a inicio </a></p>";
	   }
	 else {
	echo "<p class='controls' style = 'color:white; text-align:center;'>No se pudo registrar el usuario<a href='index.html'> Volver a inicio </a></p>";
 
	   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	   }

	mysqli_close($conn);

?>
</div>
	</body>

</html>
