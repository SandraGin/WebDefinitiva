<?php
    include ('conexion.php');
	$idproducto = $_GET['idproducto'];

	// Reducir la cantidad del producto en 1 en la base de datos
	$sql = "UPDATE productos SET cantidad = cantidad - 1 WHERE idproducto = $idproducto";
	if (mysqli_query($conn, $sql)) {
	    // Mostrar mensaje de confirmación de compra
	    echo "¡Gracias por su compra!";
	} else {
	    // Mostrar mensaje de error si la actualización de la cantidad falla
	    echo "Error al procesar la compra: " . mysqli_error($conn);
	}

	// Cerrar la conexión a la base de datos
	mysqli_close($conn);
?>
