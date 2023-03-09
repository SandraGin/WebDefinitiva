<!DOCTYPE html>

<html>
<!DOCTYPE html>
<html lang="es">
<head>
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
                        background-color: lightblue;
                        color: white;
                }
                .btn-comprar {
                        background-color: lightblue;
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
  <link rel="stylesheet" href="estilos/style.css">
</head>
<header>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <body>
     <div class="container" style="background-color:#ccc">
        <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
        <p class="text-muted">Esta es una tienda de ropa online</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Accede</h4>
              <ul class="list-unstyled">
                <li><a href="logout.php" class="text-white">Cerrar sesión</a></li>
                <li><a href="productos.php" class="text-white">Ver productos</a></li>
                <?php
                session_start();
                if(isset($_SESSION['email'])){
                        echo "<p style='color:white;' >Te damos la bienvenida: </p> <span style='color:white'>" . $_SESSION['email'] .  "</span>";
                }else{
                    header("Location:../index.html");
                }

                ?>

                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Ropalia</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
     </div>
<div style='margin-left:10%; width:80%;'>
<?php 


if(isset($_SESSION['email']) && $_SESSION['email'] == "administrador@ropalia.com"){
}else{
    header("Location:../index.php");
}
?>
<section class="form-login" style = ' margin-top: 10px; width: 75%;height: 75%;'>

<head>
    <title>Formulario de productos</title>
</head>
<body>
    <h1>Formulario de productos</h1>
    <form method="post" action="productosubido.php" enctype="multipart/form-data">
        </select><br><br>

        <label  class="controls" for="Nombreproducto">Nombre del producto:</label>
        <input  class="controls" style="color:white" type="text" id="nombreproducto" name="nombreproducto"><br><br>
        <label  class="controls" for="categoria">Seleccione la categoría</label><br/>
                  <select  class="controls" style="color:white" name="categoria" id="categoria" required>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                    <option value="niño">Niño</option>
                        </select>
        <br/><br/>
        <label  class="controls" >Indica el precio del producto:</label></br>
        <input  class="controls" style="color:white" type="number" id="precio" name="precio" ></br></br>
        <label  class="controls" style="color:white" for="precio">Indica la cantidad de producto disponible</label><br>
         <input  class="controls" style="color:white" name="cantidad" type="number" id="cantidad" required="yes"> <br>
         <label  class="controls" for="Imagen">Sube la imagen:</label><br>
        <input  class="controls" type="file" id="imagen" name="imagen"><br><br>
        <label  class="controls" style="color:white" >Inserta la descripción del producto</label><br/>
         <textarea  class="controls" style="color:white" name="descripcion" id="descripcion" required="yes" rows="5" cols="50"></textarea>
        <input class="controls" type="submit" name="submit" value="Grabar">
    </form>
</section>
        </div>
        <div>
    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
        </body>

</html>

