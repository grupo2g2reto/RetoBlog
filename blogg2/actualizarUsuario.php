
		<?php				
			session_start();
			
			if(isset($_SESSION['usuario'])){
				$usuario=$_SESSION['usuario'];
			}

			require_once('cabecera.html');
			if(isset($usuario)){
				if($usuario=='admin'){
					require_once('menuAdministrador.php');
					$usuario = $_POST["idusuario"];
					$correo = $_POST["correo"];
				}else{
					require_once('menuUsuario.php');
				}
			}
			
			
		?>
		<div id="cajaregistro">
		<h3 id="acTitulo">Actualizar Usuario</h3>
		<div class="actualizar">
			<form action="accionActualizarUsuario.php" method="post" onsubmit="confirmarActualizarUsuario()">
				
			  	<input type="text" name="usuario" id="name" placeholder=<?php echo $usuario ?> value=<?php echo $usuario ?> required readonly="readonly"/>
				<?php if(isset($correo)){echo '<input type="email" name="correo" id="name" placeholder=$correo value=$correo required readonly="readonly"/>';} ?>
			  	
			  	<input type="password" name="pass" id="name" placeholder="Contraseña" required/>
			  	<input type="password" name="cpass" id="name" placeholder="Confirmar contraseña" required/>
			  	<input class="aRegistro" type="submit" name="login" value="Actualizar">

			</form>
		</div>
		<div>
		<hr/>		
	</body>
</html>



