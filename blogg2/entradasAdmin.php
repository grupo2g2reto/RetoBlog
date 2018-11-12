<?php
	session_start();

	include 'conexion.php';

	echo "<link rel='stylesheet' href='CSS/estilo.css'>";

	try {
//-----------------------------SELECCIONAR ENTRADAS--------------------------------
		$sentencia=$db->prepare("SELECT * FROM entrada"); 
		$sentencia->execute();
		echo "<h3 class='h3titulo'>ENTRADAS:</h3>";
//-------------------------------MOSTRAR ENTRADAS----------------------------------
		foreach($sentencia as $entrada){
			echo '<br><article id="entrada"> Titulo: ' . $entrada['titulo']. ' <br>	Contenido: ' . $entrada['contenido'] . ' <br>Fecha: ' . $entrada['fecha_entrada'].' <br></article><br>';
			?><button> BORRAR ENTRADA</button> <?php
		}
		$db=null;
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}  
	echo "<br><br><a class='avolver' href='index.php'> Volver </a>"	
?>
