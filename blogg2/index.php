
<?php
	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');

	
	include 'conexion.php';

	try {
	$sentencia=$db->prepare("SELECT * FROM entrada"); 
	$sentencia->execute();

		//LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
		if (isset($usuario)){
			if ($usuario=='admin'){
				require_once('menuAdministrador.php');
			}else{
				require_once('menuUsuario.php');
			}
		}else{
			include('menuInvitado.php');
		}
		echo "<div>
		<section>";
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
