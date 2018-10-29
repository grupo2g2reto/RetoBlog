
<?php
	session_start();
	if (isset($_SESSION['usuario'])){
	
		$usuario=$_SESSION['usuario'];
	}
	//LLAMAMOS A LA CABECERA
	require_once('cabecera.html');

	
	include 'conexion.php';

	try {
	// $sentencia=$db->prepare("SELECT * FROM entrada e, comentario c WHERE e.titulo=c.titulo_entrada"); 
	// $sentencia->execute();

	$sentencia=$db->prepare("SELECT titulo 'et' FROM entrada"); 
	$sentencia->execute();


		//LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
		if (isset($usuario) &&  isset($_SESSION['logueado']) && $_SESSION['logueado'] == true ){
			
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
		echo '<h2>Entradas:</h2><br>';
	foreach($sentencia as $entrada){	
		$variable=$entrada["et"];	
	    echo '<article id="entrada"><br><a href="mostrarEntrada.php?var='.$variable.'">'.$variable.'</a>';
	}
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	echo "</section>
	</div>";

	//LLAMAMOS AL FOOTER
	require_once('footer.html');
?>