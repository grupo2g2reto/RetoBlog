<?php

session_start();

include 'conexion.php';

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$fecha=$_POST['fecha'];
<<<<<<< HEAD
$veriComentario=$_POST['veriComentario'];
=======
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f


if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {
       

try {


$sentencia=$db->prepare("INSERT INTO comentario (titulo_entrada,contenido,fecha) VALUES (?,?,?);"); 
$sentencia->execute([$titulo,$contenido,$fecha]);

$db=null;
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