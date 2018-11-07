

<?

session_start();

	if (isset($_SESSION['usuario'])){
		$usuario=$_SESSION['usuario'];
	}

	$titulo=$_SESSION['titulo'];

	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');

	include 'conexion.php';

	try {
	// $sentencia=$db->prepare("SELECT * FROM entrada e, comentario c WHERE e.titulo=c.titulo_entrada"); 
	// $sentencia->execute();

	
		//LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
		if (isset($usuario)){
			if ($usuario=='admin'){
				$sentencia=$db->prepare("SELECT numero_comentario 'nc' , titulo_entrada 'te', contenido 'c', fecha 'f', usuario_comentario 'uc' FROM comentario WHERE titulo_entrada='$titulo'"); 
				$sentencia->execute();
				require_once('menuAdministrador.php');
				echo "<div><section>";		
				echo '<br><article id="comentario"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><input type="text" placeholder="contenido" name="contenido"></article><br>';						
				echo "</div></section>";
			}else{
				$sentencia=$db->prepare("SELECT numero_comentario 'nc' , titulo_entrada 'te', contenido 'c', fecha 'f', usuario_comentario 'uc' FROM comentario WHERE titulo_entrada='$titulo' AND usuario_comentario='$usuario'"); 
				$sentencia->execute();
				require_once('menuUsuario.php');
				echo "<div><section>";		
				echo '<br><article id="entrada"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><p>'.$entrada['ec'].'</p><br><h3>Fecha de entrada:</h3><br><p>'.$entrada['ef'].'</p></article><br>';			
				echo '<article id="comentario"><h2>Comentarios:</h2><br><h3>Contenido:</h3><br><p>'.$entrada['cc'].'</p><br><h3>Fecha de comentario:</h3><br><p>'.$entrada['cf'].'</p> <button onclick="mostrarComentarios()">  INSERTAR COMENTARIO </button></article>';
				echo "</div></section>";
			}
		}else{
			$sentencia=$db->prepare("SELECT numero_comentario 'nc' , titulo_entrada 'te', contenido 'c', fecha 'f', usuario_comentario 'uc' FROM comentario WHERE titulo_entrada='$titulo'"); 
			$sentencia->execute();
			include('menuInvitado.php');
			echo "<div><section>";		
			echo '<br><article id="comentario"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><form action="accionComentarios.php" method="post"><textarea name="contenido" rows="10" cols="30"></textarea><br><button type="submit">Insertar</button></form></article><br>';						
			echo "</div></section>";
		}
	
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
?>