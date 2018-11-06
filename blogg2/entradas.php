<<<<<<< HEAD
<?php
session_start();
=======



<?php

>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f

include 'conexion.php';

echo "<link rel='stylesheet' href='CSS/estilo.css'>";

try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();
<<<<<<< HEAD
echo "<h3>ENTRADAS:</h3>";

foreach($sentencia as $entrada){
	if($entrada['veriEntrada']==0){
		echo '<br><article id="entrada"> Titulo: ' . $entrada['titulo']. ' <br>	Contenido: ' . $entrada['contenido'] . ' <br>Fecha: ' . $entrada['fecha_entrada'].' <br><button value="btnBorrar" <?php echo $accionBorrar;?>BORRAR ENTRADA</button><button value="btnBorrar" <?php echo?>PUBLICAR ENTRADA</button></article><br>';
	}
}
=======
echo "<h3 class='h3titulo'>ENTRADAS:</h3>";
foreach($sentencia as $entrada){
	$idtitulo=$entrada['titulo'];
	echo '<br><article id="entrada"> Titulo: ' . $entrada['titulo']. ' <br>	Contenido: ' . $entrada['contenido'] . ' <br>Fecha: ' . $entrada['fecha_entrada'].' <br>Verificado: ' . $entrada['Verificado']. '</article><br>';
    ?> <button value="btnBorrar" > BORRAR ENTRADA </button> <?php


}

function borrarEntrada($titulo){

    try {
    
    
    $sentencia=$db->prepare("DELETE FROM entrada where titulo=$titulo"); 
    $sentencia->execute([$titulo]);
    
    $db=null;
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
     
    }
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

<<<<<<< HEAD
echo "<a class='avolver' href='index.php'> Volver </a>"	
=======
echo "<br><br><a class='avolver' href='index.php'> Volver </a>"	
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f
?>
