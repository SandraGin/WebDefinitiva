<?php
    include ('conexion.php');
    $nombreproducto = $_POST['nombreproducto'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $imagen = $_FILES['imagen']['name'];
    $descripcion = $_POST['descripcion'];

    // Subir la imagen al servidor
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
    if(file_exists('productos')){
		if(move_uploaded_file($imagen, 'productos/'.$nombreproducto)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO productos (nombreproducto, categoria, precio, cantidad, imagen, descripcion) 
            VALUES ('$nombreproducto', '$categoria', '$precio', '$cantidad', '$imagen', '$descripcion')";
    if (mysqli_query($conn, $sql)) {
        echo "El producto se ha añadido correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
?>