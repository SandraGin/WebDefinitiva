/*<?php
    include ('conexion.php');
	$idproducto = $_GET['idproducto'];

	// Reducir la cantidad del producto en 1 en la base de datos
	$sql = "UPDATE productos SET cantidad = cantidad - 1 WHERE idproducto = $idproducto";
	$sqlcompra = "update cliente_compra_producto SET idcliente = $_SESSION['idcliente'], email = $_SESSION['email'], idproduto = $idproducto WHERE idcliente = $_SESSION['idcliente'] AND idproducto = $idproducto";
	if (mysqli_query($conn, $sql, $sqlcompra)) {
	    // Mostrar mensaje de confirmación de compra
	    echo "¡Gracias por su compra!";
	} else {
	    // Mostrar mensaje de error si la actualización de la cantidad falla
	    echo "Error al procesar la compra: " . mysqli_error($conn);
	}

	// Cerrar la conexión a la base de datos
	mysqli_close($conn);
?>
*/
<?php
    session_start();
    include('conexion.php');
    $idproducto = $_GET['idproducto'];
    $email = $_SESSION['email'];

    // Insertar la compra del producto en la tabla cliente_compra_producto
    $sqlcompra = "INSERT INTO compra VALUES ('$idproducto','$email')";
    if (mysqli_query($conn, $sqlcompra)) {
           echo "¡Gracias por su compra!";

	// Reducir la cantidad del producto en 1 en la base de datos
      /*  $sql = "UPDATE productos SET cantidad = cantidad - 1 WHERE idproducto = $idproducto";
        if (mysqli_query($conn, $sql)) {
            // Mostrar mensaje de confirmación de compra
        } else {
            // Mostrar mensaje de error si la actualización de la cantidad falla
            echo "Error al actualizar la cantidad: " . mysqli_error($conn);
        }*/
    } else {
        // Mostrar mensaje de error si la inserción falla
        echo "Error al procesar la compra: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
?>
