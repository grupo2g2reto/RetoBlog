<?php
	session_start();
//------------------------------------------------SI HAY USUARIO
	if (isset($_SESSION['usuario'])){
		$usuario=$_SESSION['usuario'];
		?>

		<script>
			//UTILIZAMOS EL LOCALSTORAGE PARA GUARDAR EL USUARIO
			//window.localStorage.setItem("usuario");
<<<<<<< HEAD
			
			var cookieDate = new Date (2018,11,15);
			var usuario="<?php echo $usuario?>";
			document.cookie="usuario=" + escape(usuario) + ";expires=" + cookieDate.toUTCString();
			
	function createCookie(name, value, days, path,domain,secure) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
   var  expires =  date.toUTCString();
  } else var expires = "";
  cookieString = name + "=" + escape(value);
	if(expires) cookieString += "; expires=" + expires;
	if(path) cookieString += "; path=" + escape(path);
	if(domain) cookieString += "; domain=" + escape(domain);
	if(secure) cookieString += "; secure";
	document.cookie=cookieString;
	}

createCookie("usuario","<?php echo $usuario?>",5);

		</script>
=======
			document.cookie="key=value;"
			document.cookies = "usuario= <?php echo $usuario?>";
	    </script>
>>>>>>> 61cf482b22692f84c02e19bef4dae0e082c45921

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