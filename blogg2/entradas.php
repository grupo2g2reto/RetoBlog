


<?php


include 'conexion.php';

echo "<link rel='stylesheet' href='CSS/estilo.css'>";

try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();
echo "<h3>ENTRADAS:</h3>";
foreach($sentencia as $entrada){
	
	echo '<br><article id="entrada"> Titulo: ' . $entrada['titulo']. ' <br>	Contenido: ' . $entrada['contenido'] . ' <br>Fecha: ' . $entrada['fecha_entrada'].' <br>Verificado: ' . $entrada['Verificado']. '<button value="btnBorrar" <?php echo $accionBorrar;?>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

echo "<a class='avolver' href='index.php'> Volver </a>"	
?>
