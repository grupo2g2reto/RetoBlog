<?
	session_start();
//---------------------------------------SI EXISTE USUARIO
	if (isset($_SESSION['usuario'])){
		$usuario=$_SESSION['usuario'];
	}
	$titulo=$_SESSION['titulo'];

//----------------------------------------LLAMAMOS A LA CABECERA
	require_once('cabecera.html');
	
//----------------------------------------LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
	if (isset($usuario)){
//----------------------------------------SI USUARIO ES ADMIN
		if ($usuario!='admin'){
			require_once('menuUsuario.php');
			echo "<div><section>";		
			echo '<br><article id="comentario"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><form action="accionComentarios.php" method="post"><textarea class="textarea" name="contenido" rows="10"></textarea><br><button type="submit">Insertar</button></form></article><br>';						
			echo "</div></section>";
		}
	}else{
//----------------------------------------SI USUARIO ES INVITADO
		include('menuInvitado.php');
		echo "<div><section>";		
		echo '<br><article id="comentario"><h2>'.$titulo.':</h2><br><h3>Contenido:</h3><br><form action="accionComentarios.php" method="post"><textarea class="textarea" name="contenido" rows="10"></textarea><br><button type="submit">Insertar</button></form></article><br>';						
		echo "</div></section>";
	}
//----------------------------------------LLAMAMOS AL FOOTER
	require_once('footer.html');
?>