<!DOCTYPE html>
<html>
<head>
	<title>Mi tienda en línea</title>
	<style>
		/* Estilos CSS */
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		.btn-comprar {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<?php
		// Incluir el archivo de conexión a la base de datos
		include ('conexion.php');

		// Obtener los productos de la base de datos
		$sql = "SELECT * FROM productos";
		$resultado = mysqli_query($conn, $sql);

		// Crear una tabla HTML para mostrar los productos
		echo "<table>";
		echo "<tr><th>Nombre del producto</th><th>Categoría</th><th>Precio</th><th>Cantidad</th><th>Descripción</th></tr>";
		while ($fila = mysqli_fetch_assoc($resultado)) {
			//echo "<tr><td>".$fila['nombreproducto']."</td><td>".$fila['categoria']."</td><td>".$fila['precio']."</td><td>".$fila['cantidad']."</td><td>".$fila['descripcion']."</td></td><td><button class='btn-comprar'>Comprar</button></td></tr>";
		echo "<tr><td>".$fila['nombreproducto']."</td><td>".$fila['categoria']."</td><td>".$fila['precio']."</td><td>".$fila['cantidad']."</td><td>".$fila['descripcion']."</td></td><td><a href='comprado.php?idproducto=".$fila['idproducto']."' class='btn-comprar'>Comprar</a></td></tr>";
}
		echo "</table>";

		// Cerrar la conexión a la base de datos
		mysqli_close($conn);
	?>
</body>
</html>

