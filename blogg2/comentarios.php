<<<<<<< HEAD
<?php
session_start();

include 'conexion.php'; 
=======



<?php


include 'conexion.php';
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f

        
echo "<link rel='stylesheet' href='CSS/estilo.css'>";
try {
$sentencia=$db->prepare("SELECT * FROM comentario"); 
$sentencia->execute();
<<<<<<< HEAD
echo "<h3>COMENTARIOS:</h3>";
foreach($sentencia as $comentario){
	if ($veriComentario==0){
		echo '<br><article id="entrada"> Titulo: ' . $comentario['titulo_entrada']. ' <br>	Contenido: ' . $comentario['contenido'] . ' <br>Fecha: ' . $comentario['fecha'].'<br>Usuario: ' . $comentario['usuario_comentario'].'<br><button>BORRAR COMENTARIO</button><button>PUBLICAR COMENTARIO</button></article><br>';
	}
=======
echo "<h3 class='h3titulo'>COMENTARIOS:</h3>";
foreach($sentencia as $comentario){
	
	echo '<br><article id="entrada"> Titulo: ' . $comentario['titulo_entrada']. ' <br>	Contenido: ' . $comentario['contenido'] . ' <br>Fecha: ' . $comentario['fecha'].'<br>Usuario: ' . $comentario['usuario_comentario'].'<br>Verificado: ' . $comentario['Verificado']. '</article><br>';
    ?> <button > BORRAR COMENTARIO </button> <?php
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f
}
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