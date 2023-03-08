<!DOCTYPE html>
<html lang="es">
<body>
<header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="./index.html" class="active">Home</a></li>


                            <li class="submenu">
                                <a href="javascript:;">Nuestros productos</a>
                                <ul>
                                    <li><a href="hombre.html">Hombre</a></li>
                                    <li><a href="#">Mujer</a></li>
                                    <li><a href="#">Niños</a></li>
                                    <li><a href="#">Mascotas</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="javascript:;">Accede</a>
                                <ul>
	                            <li><a href="#reservation">Inicia sesión</a></li>
	                            <li><a href="#reservation">Regístrate</a></li>
                                </ul>
                            </li>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<br/>
	<div>
                <h4>Index</h4>
	<?php
		if (!isset($_SESSION)) {
  		session_start();
		echo "Has has iniciado sesión con el usuario ".$_SESSION['email'].".";
		echo "<a href='logout.php'>Cerrar Sesión</a>";
		}
		else
		{
			echo "<a href='login.html'>Iniciar Sesión</a>";
		}
		//include ('conexion.php');
		//sesion_start();
		//echo "$_SESSION['email']";
		//echo "Iniciado sesión con $email";
	?>
        </div>
	</body>

</html>
