


<?php

include 'conexion.php';

echo "<link rel='stylesheet' href='CSS/estilo.css'>";

try {
$sentencia=$db->prepare("SELECT * FROM usuario"); 
$sentencia->execute();
echo "<h3>USUARIOS:</h3>";
echo "<div><section>";
foreach($sentencia as $usuario){
    echo '<br>  <article id="entrada"> Usuario: ' . $usuario['usuario']. ' <br>Correo: ' . $usuario['correo'] . ' <br>Contraseña: ' . $usuario['pass'].' <button>  BORRAR USUARIO </button></article><br>';
}
echo "</div></section>";
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

echo "<a class='avolver' href='index.php'> Volver </a>"	

?>


