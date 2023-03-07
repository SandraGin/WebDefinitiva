<?php
    include ('conexion.php');
    $nombreproducto = $_POST['nombreproducto'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $imagen = $_FILES['imagen']['name'];
    $descripcion = $_POST['descripcion'];
    $imagen_temporal = ['imagen']['tmp_name'];

  
	if(move_uploaded_file($imagen_temporal, "/var/www/html/productos/$imagen")){
			echo "Archivo guardado con exito";
	}else{
			echo "Archivo no se pudo guardar";
		}
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO productos (nombreproducto, categoria, precio, cantidad, imagen, descripcion) 
            VALUES ('$nombreproducto', '$categoria', '$precio', '$cantidad', '$imagen', '$descripcion')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "El producto se ha añadido correctamente.";
        mysqli_close($conn);

    } else {
    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($conn);
        
    }
     // Cerrar la conexión a la base de datos
?>
