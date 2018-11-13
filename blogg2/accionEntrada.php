<?php

session_start();

include 'conexion.php';
//--------------------------------CARGAR DATOS-----------------------------------------------
$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];

//--------------------------------SI EL USUARIO SE HA LOGUEADO-------------------------------
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {

//--------------------------------INSERTAR ENTRADA-------------------------------------------
	try {
		$sentencia=$db->prepare("INSERT INTO entrada (titulo,contenido) VALUES (?,?);"); 
		$sentencia->execute([$titulo,$contenido]);
		$db=null;
	} catch(PDOException $e) {
	  	echo 'Error: ' . $e->getMessage();
	}
	header("location: index.php");
} else {
//--------------------------------SI EL USUARIO NO ESTÁ LOGUEADO------------------------------
    echo "Esta pagina es solo para usuarios registrados.<br>";  
    echo "<br><a href='login.php'>Login</a>";
    echo "<br><br><a href='registro.php'>Registrarme</a>";
    exit;      
}
?>


