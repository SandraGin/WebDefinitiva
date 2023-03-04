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

<?php


	include('conexion.php');
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$dir=$_POST['dir'];
	$tlf=$_POST['tlf'];
	$edad= $_POST['edad'];
	$contrasena = $_POST['contrasena'];
	$email = $_POST['email'];

	$sql = "INSERT INTO clientes values (null,'$nombre','$apellidos','$dir','$tlf','$edad','$contrasena','$email')";

	$insertar=mysqli_query($conn,$sql);

	   if ($insertar) {
	    echo "<h3>Usuario registrado correctamente</h3>";
	   }
	 else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	   }

	mysqli_close($conn);

	    echo "<a href='index.html'> Volver a inicio </a>";
?>
	</body>

</html>
