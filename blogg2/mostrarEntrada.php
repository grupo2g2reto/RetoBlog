

<?

session_start();

if (isset($_SESSION['usuario'])){
	$usuario=$_SESSION['usuario'];
}

	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');


	include 'conexion.php';

	try {

	if(isset($_GET['var']) && $_GET['var'] !== ''){
		$titulo = $_GET['var'];
		//Guardo en la sesion el titulo de la entrada para pasarsela al comentario
		$_SESSION['titulo']=$titulo;
	  } else {
		echo "failed";
	  }


		//LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
		if (isset($usuario)){
			if ($usuario!='admin'){
				$sentencia1=$db->prepare("SELECT entrada.titulo 'et' , entrada.contenido 'ec', entrada.fecha_entrada 'ef' FROM entrada  WHERE entrada.titulo='$titulo'"); 
				$sentencia1->execute();
				$sentencia2=$db->prepare("SELECT comentario.contenido 'cc', comentario.fecha 'cf' FROM comentario  WHERE comentario.titulo_entrada='$titulo' AND comentario.usuario_comentario='$usuario'"); 
				$sentencia2->execute();
				require_once('menuUsuario.php');
				echo "<div><section>";
			foreach($sentencia1 as $entrada1){		
				echo '<br><article id="entrada"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><p>'.$entrada1['ec'].'</p><br><h3>Fecha de entrada:</h3><br><p>'.$entrada1['ef'].'</p><button onclick="mostrarComentarios()">  INSERTAR COMENTARIO </button></article><br>';			
			}
			foreach($sentencia2 as $entrada2){		
				echo '<article id="comentario"><h2>Comentario:</h2><br><h3>Contenido:</h3><br><p>'.$entrada2['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada2['cf'].'</p></article>';
			}
			echo "</section></div>";
			}
		}else{
			$sentencia1=$db->prepare("SELECT entrada.titulo 'et' , entrada.contenido 'ec', entrada.fecha_entrada 'ef' FROM entrada  WHERE entrada.titulo='$titulo'"); 
			$sentencia1->execute();
			$sentencia2=$db->prepare("SELECT comentario.contenido 'cc', comentario.fecha 'cf', comentario.usuario_comentario 'cu' FROM comentario  WHERE comentario.titulo_entrada='$titulo'"); 
			$sentencia2->execute();
			include('menuInvitado.php');
			echo "<div><section>";
			foreach($sentencia1 as $entrada1){		
				
				echo '<br><article id="entrada"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><p>'.$entrada1['ec'].'</p><br><h3>Fecha de entrada:</h3><br><p>'.$entrada1['ef'].'</p></article><br>';			

			}
			foreach($sentencia2 as $entrada2){		
				
				echo '<article id="comentario"><h2>Comentario:</h2><br><h3>Contenido:</h3><br><p>'.$entrada2['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada2['cf'].'</p><h3>Usuario:</h3><br><p>'.$entrada2['cu'].'</p></article>';
			}

			echo "</section></div>";
		}
	
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
?>