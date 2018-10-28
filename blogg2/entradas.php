<?php


include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();
echo "<h3>ENTRADAS:</h3>";
foreach($sentencia as $entrada){
	
	echo '<br><article id="entrada"> Titulo: ' . $entrada['titulo']. ' <br>	Contenido: ' . $entrada['contenido'] . ' <br>Fecha: ' . $entrada['fecha_entrada'].' <br>Verificado: ' . $entrada['Verificado']. '<button>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  


?>
