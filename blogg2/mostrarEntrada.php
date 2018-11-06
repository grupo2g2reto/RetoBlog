

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

	$sentencia=$db->prepare("SELECT entrada.titulo 'et' , entrada.contenido 'ec', entrada.fecha_entrada 'ef', comentario.contenido 'cc', comentario.fecha 'cf' FROM entrada LEFT JOIN comentario ON entrada.titulo=comentario.titulo_entrada WHERE entrada.titulo='$titulo'"); 
	$sentencia->execute();

	

		//LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
		if (isset($usuario)){
			if ($usuario=='admin'){
				require_once('menuAdministrador.php');
			}else{
				require_once('menuUsuario.php');
				echo "<div><section>";
			foreach($sentencia as $entrada){		
				echo '<br><article id="entrada"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><p>'.$entrada['ec'].'</p><br><h3>Fecha de entrada:</h3><br><p>'.$entrada['ef'].'</p></article><br>';			
				echo '<article id="comentario"><h2>Comentarios:</h2><br><h3>Contenido:</h3><br><p>'.$entrada['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada['cf'].'</p> <button onclick="mostrarComentarios()">  INSERTAR COMENTARIO </button></article>';
			}
			echo "</section></div>";
			}
		}else{
			include('menuInvitado.php');
			echo "<div><section>";
			foreach($sentencia as $entrada){		

				//SI EL COMENTARIO ESTÁ VERIFICADO, LO MUESTRA	
				if ($veriComentario0==1){	
					echo '<article id="comentario"><h2>Comentarios:</h2><br><h3>Contenido:</h3><br><p>'.$entrada['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada['cf'].'</p> ';
				}
				echo '<button>  INSERTAR COMENTARIO </button></article>';

				echo '<br><article id="entrada"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><p>'.$entrada['ec'].'</p><br><h3>Fecha de entrada:</h3><br><p>'.$entrada['ef'].'</p></article><br>';			

				echo '<article id="comentario"><h2>Comentarios:</h2><br><h3>Contenido:</h3><br><p>'.$entrada['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada['cf'].'</p> <button onclick="mostrarComentarios()">INSERTAR COMENTARIO</button></article>';

				echo '<article id="comentario"><h2>Comentarios:</h2><br><h3>Contenido:</h3><br><p>'.$entrada['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada['cf'].'</p> </article>';

			}
			echo "</section></div>";
		}
	
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
?>