<html>
	<h1>En construcción, próximamente</h1>
	        <?php
                // Incluir el archivo de conexión a la base de datos
                include ('conexion.php');
		session_start();
		$usuario= $_SESSION['email'];
		echo "$usuario";
                // Obtener los productos de la base de datos
                $sql = "SELECT * FROM compra WHERE email_cliente = '$usuario';";
		$resultado = mysqli_query($conn, $sql);

                // Crear una tabla HTML para mostrar los productos
                // Cerrar la conexión a la base de datos
                mysqli_close($conn);
        ?>
</html>

