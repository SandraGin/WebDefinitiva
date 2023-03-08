<!DOCTYPE html>
<html lang="es">
<head>
   <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<div class='container'>
<?php
    session_start();
    include('conexion.php');
    $idproducto = $_GET['idproducto'];
    $email = $_SESSION['email'];
//	echo "$email";
//	echo "$idproducto";
    // Insertar la compra del producto en la tabla cliente_compra_producto
    $sqlcompra = "INSERT INTO compra (email_cliente,idproducto) VALUES ('$email', $idproducto)";
  //  	echo "$sqlcompra";
	if (mysqli_query($conn, $sqlcompra)) {
           echo "<p class='controls' style = 'color:white; text-align:center;'>¡Gracias por su compra!<p>";

	// Reducir la cantidad del producto en 1 en la base de datos
        $sql = "UPDATE productos SET cantidad = cantidad - 1 WHERE idproducto = $idproducto";
        if (mysqli_query($conn, $sql)) {
            // Mostrar mensaje de confirmación de compra
        } else {
            // Mostrar mensaje de error si la actualización de la cantidad falla
            echo "Error al actualizar la cantidad: " . mysqli_error($conn);
	    mysqli_close($conn);

        }
    } else {
        // Mostrar mensaje de error si la inserción falla
        echo "Error al procesar la compra: " . mysqli_error($conn);
	    mysqli_close($conn);
    }

   // Cerrar la conexión
?>

</div>
</body>
</html>
