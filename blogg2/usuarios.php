


<?php

include 'conexion.php';

echo "<link rel='stylesheet' href='CSS/estilo.css'>";

try {
$sentencia=$db->prepare("SELECT * FROM usuario"); 
$sentencia->execute();
<<<<<<< HEAD
echo "<h3>USUARIOS:</h3>";
echo "<div><section>";
foreach($sentencia as $usuario){
    echo '<br>  <article id="entrada"> Usuario: ' . $usuario['usuario']. ' <br>Correo: ' . $usuario['correo'] . ' <br>Contraseña: ' . $usuario['pass'].' <button>  BORRAR USUARIO </button></article><br>';
=======
echo "<h3 class='h3titulo'>USUARIOS:</h3>";
echo "<div><section>";
foreach($sentencia as $usuario){
    echo '<br>  <article id="entrada"> Usuario: ' . $usuario['usuario']. ' <br>Correo: ' . $usuario['correo'] . ' <br>Contraseña: ' . $usuario['pass'].' </article><br>';
    ?> <button > BORRAR USUARIO </button> <?php
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f
}
echo "</div></section>";
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

<<<<<<< HEAD
echo "<a class='avolver' href='index.php'> Volver </a>"	
=======
echo "<br><a class='avolver' href='index.php'> Volver </a>"	
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f

?>


