<html>

<?php

session_start();

if(isset($_SESSION['email']) && $_SESSION['email'] == "administrador@ropalia.com"){
}else{
    header("Location:../index.php");
}
?>
	<h1> En construcción, mientras tanto puedes usar phpmyadmin</h1>
</html>
