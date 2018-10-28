<?php


include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM usuario"); 
$sentencia->execute();
echo "<h3>USUARIOS:</h3>";
foreach($sentencia as $usuario){
    echo '<br>  <article id="entrada"> Usuario: ' . $usuario['usuario']. ' <br>Correo: ' . $usuario['correo'] . ' <br>Contraseña: ' . $usuario['pass'].' <button>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

	
?>

