


<?php


include 'conexion.php';

echo "<link rel='stylesheet' href='CSS/estilo.css'>";

try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();
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
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

echo "<br><br><a class='avolver' href='index.php'> Volver </a>"	
?>
