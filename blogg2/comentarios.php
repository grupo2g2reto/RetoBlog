<?php


include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM comentario"); 
$sentencia->execute();
echo "<h3>COMENTARIOS:</h3>";
foreach($sentencia as $comentario){
	
	echo '<br><article id="entrada"> Titulo: ' . $comentario['titulo_entrada']. ' <br>	Contenido: ' . $comentario['contenido'] . ' <br>Fecha: ' . $comentario['fecha'].'<br>Usuario: ' . $comentario['usuario_comentario'].'<br>Verificado: ' . $comentario['Verificado']. '<button>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

?>