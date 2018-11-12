<?php
	session_start();
//------------------------------------------------SI HAY USUARIO
	if (isset($_SESSION['usuario'])){
		$usuario=$_SESSION['usuario'];
		?>

		<script>
			//UTILIZAMOS EL LOCALSTORAGE PARA GUARDAR EL USUARIO
			//window.localStorage.setItem("usuario");
			document.cookies = "usuario= <?php echo $usuario?>";
	    </script>

	    <?php
	}
	

//------------------------------------------------LLAMAMOS A LA CABECERA
	require_once('cabecera.html');
	
	include 'conexion.php';

	try {
		$sentencia=$db->prepare("SELECT titulo 'et' FROM entrada"); 
		$sentencia->execute();

		
//-------------------------------------------LLAMAMOS AL MENU DEPENDIENDO DEL USUARIO REGISTRADO
			if (isset($usuario) &&  isset($_SESSION['logueado']) && $_SESSION['logueado'] == true ){
				if ($usuario=='admin'){
					 require_once('menuAdministrador.php');
					 ?><script type="text/javascript" src="JS/script.js"></script><?php
				}
				else if($usuario!='admin') {
					require_once('menuUsuario.php');
					echo "<div>
					<section id='entrada'>";
					echo '<h2>Entradas:</h2><br>';
					foreach($sentencia as $entrada){	
						$variable=$entrada["et"];	
						echo '<article><br><a href="mostrarEntrada.php?var='.$variable.'">'.$variable.'</a>';
					}
				}
		}else{
//-----------------------------------SI NO HAY USUARIO LOGUEADO
			include('menuInvitado.php');
			echo "<div>
			<section id='entrada'>";
			echo '<h2>Entradas:</h2><br>';
			foreach($sentencia as $entrada){	
				$variable=$entrada["et"];	
				echo '<article><br><a href="mostrarEntrada.php?var='.$variable.'">'.$variable.'</a>';
			}
		}
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	} 
	echo "</section>
	</div>";
//----------------------------------LLAMAMOS AL FOOTER
	require_once('footer.html');
?>