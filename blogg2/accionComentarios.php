<?php

session_start();
include 'conexion.php';
$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$fecha=$_POST['fecha'];
$usuario=$_POST['usuario'];

if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {
       

try {


$sentencia=$db->prepare("INSERT INTO comentario (titulo_entrada,contenido,fecha,usuario_comentario) VALUES (?,?,?,?);"); 
$sentencia->execute([$titulo,$contenido,$fecha,$usuario]);

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