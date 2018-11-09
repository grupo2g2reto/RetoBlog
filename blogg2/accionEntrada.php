<?php

session_start();

include 'conexion.php';

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];



if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {

try {
$sentencia=$db->prepare("INSERT INTO entrada (titulo,contenido) VALUES (?,?);"); 
$sentencia->execute([$titulo,$contenido]);

$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

header("location: index.php");
        

} else {
        
    echo "Esta pagina es solo para usuarios registrados.<br>";
        
    echo "<br><a href='login.php'>Login</a>";

    echo "<br><br><a href='registro.php'>Registrarme</a>";
  
    exit;
        
  }



?>


