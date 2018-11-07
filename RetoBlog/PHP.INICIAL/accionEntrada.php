<?php

session_start();

include 'conexion.php';

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$fecha=$_POST['fecha'];


if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {

try {
$sentencia=$db->prepare("INSERT INTO entrada VALUES (?,?,?);"); 
$sentencia->execute([$titulo,$contenido,$fecha]);

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

} else {
        
    echo "Esta pagina es solo para usuarios registrados.<br>";
        
    echo "<br><a href='login.php'>Login</a>";

    echo "<br><br><a href='registro.php'>Registrarme</a>";
  
    exit;
        
  }



?>



<!-- include 'conexion.php';

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$fecha=$_POST['fecha_entrada'];

try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();

while( $row = $sentencia->fetch() )
    echo $row[0] . '<br/>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}   -->

