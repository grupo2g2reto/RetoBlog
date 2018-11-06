


<?php

include 'conexion.php';

echo "<link rel='stylesheet' href='CSS/estilo.css'>";

try {
$sentencia=$db->prepare("SELECT * FROM usuario"); 
$sentencia->execute();
echo "<h3 class='h3titulo'>USUARIOS:</h3>";
echo "<div><section>";
foreach($sentencia as $usuario){
    echo '<br>  <article id="entrada"> Usuario: ' . $usuario['usuario']. ' <br>Correo: ' . $usuario['correo'] . ' <br>Contraseña: ' . $usuario['pass'].' </article><br>';
    ?> <button > BORRAR USUARIO </button> <?php
}
echo "</div></section>";
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

echo "<br><a class='avolver' href='index.php'> Volver </a>"	

?>


