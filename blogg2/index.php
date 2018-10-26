
<?php
	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');

	
	include 'conexion.php';

	try {
	// $sentencia=$db->prepare("SELECT * FROM entrada e, comentario c WHERE e.titulo=c.titulo_entrada"); 
	// $sentencia->execute();

	$sentencia=$db->prepare("SELECT entrada.titulo 'et' , entrada.contenido 'ec', entrada.fecha_entrada 'ef', comentario.contenido 'cc', comentario.fecha 'cf' FROM entrada LEFT JOIN comentario ON entrada.titulo=comentario.titulo_entrada"); 
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
	    echo '<article id="entrada"><br>Titulo: ' . $entrada['et'] . '<br>  Contenido: ' . $entrada['ec']. ' <br>Fecha: ' . $entrada['ef'].'<br>Comentario: '.$entrada['cc'].' <br>Fecha Comentario: '.$entrada['cf'].'</article>';
	}
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	echo "</section>
	</div>";

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
