<?php
session_start();

include 'conexion.php'; 

        
echo "<link rel='stylesheet' href='CSS/estilo.css'>";
try {
$sentencia=$db->prepare("SELECT * FROM comentario"); 
$sentencia->execute();
echo "<h3>COMENTARIOS:</h3>";
foreach($sentencia as $comentario){
	if ($veriComentario==0){
		echo '<br><article id="entrada"> Titulo: ' . $comentario['titulo_entrada']. ' <br>	Contenido: ' . $comentario['contenido'] . ' <br>Fecha: ' . $comentario['fecha'].'<br>Usuario: ' . $comentario['usuario_comentario'].'<br><button>BORRAR COMENTARIO</button><button>PUBLICAR COMENTARIO</button></article><br>';
	}
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  
echo "<br><a class='avolver' href='index.php'> Volver </a>"	
?>