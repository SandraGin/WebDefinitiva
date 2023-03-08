<?php
include('conexion.php');

$nombreproducto = $_POST['nombreproducto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$imagen = $_FILES['imagen']['name'];
$imagen_temporal = $_FILES['imagen']['tmp_name'];
$descripcion = $_POST['descripcion'];
// Comprobamos que se haya seleccionado una imagen
if ($imagen) {
    // Movemos la imagen temporal al directorio de imágenes
    move_uploaded_file($imagen_temporal, "/var/www/html/WebDefinitiva/productos/$imagen");
} else {
    // Si no se ha seleccionado una imagen, asignamos una imagen por defecto
   // $imagen = "default.jpg";
}

$sql = "INSERT INTO productos (idproducto, nombreproducto, categoria, precio, cantidad, descripcion, imagen) VALUES (null, '$nombreproducto', $categoria, $precio, $cantidad,'$descripcion', '$imagen')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "<h1> Alta de producto realizada correctamente </h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);$_POST['cantidad'];

echo "<br><a href='index.html'> Volver al Inicio </a>";
?>
