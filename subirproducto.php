<?php
    include ('conexion.php');
    $nombreproducto = $_POST['nombreproducto'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $imagen = $_FILES['imagen']['name'];
    $descripcion = $_POST['descripcion'];
    $target_dir = "productos/";
    $target_file = $target_dir . basename($imagen_nombre);
    
    // Verificar si el archivo es una imagen
    $check = getimagesize($imagen_tmp);
    if($check === false) {
        echo "El archivo no es una imagen.";
        exit();
    }
    
    // Verificar si el archivo ya existe
    if(file_exists($target_file)) {
        echo "El archivo ya existe.";
        exit();
    }
    
    // Verificar si el archivo es demasiado grande
    if($_FILES['imagen']['size'] > 5000000) {
        echo "El archivo es demasiado grande.";
        exit();
    }
    
    // Subir el archivo al servidor
    if(move_uploaded_file($imagen_tmp, $target_file)) {
        echo "El archivo se ha subido correctamente.";
    } else {
        echo "No se pudo subir el archivo.";
    }
    
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO productos (nombreproducto, categoria, precio, cantidad, imagen, descripcion) 
            VALUES ('$nombreproducto', '$categoria', '$precio', '$cantidad', '$imagen_nombre', '$descripcion')";
    if (mysqli_query($conn, $sql)) {
        echo "El producto se ha añadido correctamente.";
        mysqli_close($conn);

    } else {
    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($conn);
        
    }
?> 