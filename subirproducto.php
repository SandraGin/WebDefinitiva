<!DOCTYPE html>

<html>

<?php 

session_start();

if(isset($_SESSION['email']) && $_SESSION['email'] == "administrador@ropalia.com"){
}else{
    header("Location:../index.php");
}
?>


<head>
    <title>Formulario de productos</title>
</head>
<body>
    <h1>Formulario de productos</h1>
    <form method="post" action="productosubido.php" enctype="multipart/form-data">
        </select><br><br>

        <label for="Nombreproducto">Nombre del producto:</label>
        <input type="text" id="nombreproducto" name="Nombreproducto"><br><br>
        <label for="categoria">Seleccione la categoría</label><br/>
                  <select name="categoria" id="categoria" required>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                    <option value="niño">Niño</option>
                        </select>
        <br/><br/>
        <label>Indica el precio del producto:</label></br>
        <input type="number" id="precio" name="precio" ></br></br>
        <label for="precio">Indica la cantidad de producto disponible</label><br>
         <input name="cantidad" type="number" id="cantidad" required="yes"> <br>
         <label for="Imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen"><br><br>
        <label>Inserta la descripción del producto</label><br/>
         <textarea name="descripcion" id="descripcion" required="yes" rows="5" cols="50"></textarea>
        <input type="submit" name="submit" value="Grabar">
	<input type="button" value="borrar producto" action="borrarproducto.php">
	<input type="button" value="ver productos" action="verproductos.php">
    </form>
    </form>
</body>
</html>

