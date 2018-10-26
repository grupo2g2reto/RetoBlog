
<?php
	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');
	//LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
	require_once('menuInvitado.php');
	echo "<div>
	<section>";
	include 'conexion.php';

	try {
	$sentencia=$db->prepare("SELECT * FROM entrada"); 
	$sentencia->execute();

	foreach($sentencia as $entrada){
	    echo '<article><br>Titulo: ' . $entrada['titulo'] . '<br>  Contenido: ' . $entrada['contenido']. ' <br>Fecha: ' . $entrada['fecha_entrada'].'</article>';
	}
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	echo "</section>
	</div>";

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
