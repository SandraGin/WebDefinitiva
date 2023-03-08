<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="estilos/style.css">
        </head>
  <body>
     <div class="container" style="background-color:#ccc">
        <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Acerca de </h4>
              <p class="text-muted">Esta es una tienda de ropa online</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Accede</h4>
              <ul class="list-unstyled">
                <li><a href="login.html" class="text-white">Iniciar sesión</a></li>
                <li><a href="registrarse.html" class="text-white">Registrarse</a></li>
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


<?php
	session_start();
	include ('conexion.php');
	$email = $_POST['email'];
	$contrasena = $_POST ['contrasena'];

	$consulta_login = sprintf("select * from clientes WHERE email='$email' AND contrasena = '$contrasena'");
	$consulta_admin = sprintf("select * from administrador WHERE email='$email' AND contrasena = '$contrasena'");
	$resultado = $conn->query($consulta_login);
	$resultadoadmin = $conn->query($consulta_admin);
	if (mysqli_num_rows($resultado) > 0)  {
	    // Iniciar sesión y redirigir al usuario a la página de inicio
	    $_SESSION['email'] = $email;
	//if(isset)
	   header("Location: index.php");
	} 
	elseif (mysqli_num_rows($resultadoadmin) > 0){
	    $_SESSION['email'] = $email;
		header ("Location: subirproducto.php");
	}
	else {
	    // Mostrar un mensaje de error si el usuario no existe
		// header("Location: index.html");
	    echo "<p class ='controls' style = 'color:white; text-align:center;'> Correo electrónico o contraseña incorrectos.  <a href='index.html'>vuelva a intentarlo</a>.</p><br/>";
	}
	

?>	
	<center>
	<img src="productos/hangers-1850082_1280.jpg"></img>
    	</center>
	</header>
     </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
