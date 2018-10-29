

<?

session_start();
if (isset($_SESSION['usuario'])){

	$usuario=$_SESSION['usuario'];
}
	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');
	if(isset($_SESSION['usuario'])){
		$usuario=$_SESSION['usuario'];
	}

	include 'conexion.php';

	try {
	// $sentencia=$db->prepare("SELECT * FROM entrada e, comentario c WHERE e.titulo=c.titulo_entrada"); 
	// $sentencia->execute();

	if(isset($_GET['var']) && $_GET['var'] !== ''){
		$titulo = $_GET['var'];
	  } else {
		echo "failed";
	  }

	$sentencia=$db->prepare("SELECT entrada.titulo 'et' , entrada.contenido 'ec', entrada.fecha_entrada 'ef', comentario.contenido 'cc', comentario.fecha 'cf' FROM entrada LEFT JOIN comentario ON entrada.titulo=comentario.titulo_entrada WHERE entrada.titulo='$titulo'"); 
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
			echo "<div><section>";
			foreach($sentencia as $entrada){		
				echo '<br><article id="entrada"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><p>'.$entrada['ec'].'</p><br><h3>Fecha de entrada:</h3><br><p>'.$entrada['ef'].'</p></article><br>';			
				echo '<article id="comentario"><h2>Comentarios:</h2><br><h3>Contenido:</h3><br><p>'.$entrada['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada['cf'].'</p></article>';
			}
		}
<<<<<<< HEAD
		echo "<div>
		<section>";
		echo '<h2>'.$titulo.'</h2><br>';
		foreach($sentencia as $entrada){		
			echo '<article><br><h3>Contenido:</h3><br><p>'.$entrada['ec'].'</p><br><h3>Fecha de entrada:</h3><p>'.$entrada['ef'].'</p><br><h4>Comentarios:</h4><p>'.$entrada['cc'].'</p><br><h4>Fecha de comentario:</h4><p>'.$entrada['cf'].'</p>';
			echo "<button>  INSERTAR COMENTARIO </button>";
		}
=======
		echo "</section></div>";

		
>>>>>>> 1361a56429e380b379a08aa1f7938f8720964d2a
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
?>