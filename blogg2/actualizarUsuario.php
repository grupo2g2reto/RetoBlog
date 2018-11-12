<?php			
//----------------------------------CARGAR DATOS-----------------------------------
	$usuario = $_POST["idusuario"];
	$correo = $_POST["correo"];
//----------------------------------CARGAR CABECERA--------------------------------
	require_once('cabecera.html');
//----------------------------------SI EXISTE USUARIO------------------------------
	if(isset($usuario)){
//----------------------------------MOSTRAR EL MENÚ DEPENDIENDO DEL USUARIO LOGUEADO
		if($usuario=='admin'){
			require_once('menuAdministrador.php');
		}else{
			require_once('menuUsuario.php');
		}
	}
?>
		<div id="cajaregistro">
		<h3 id="acTitulo">Actualizar Usuario</h3>
		<div class="actualizar">
			<form action="accionActualizarUsuario.php" method="post">
			  	<input type="text" name="usuario" id="name" placeholder=<?php echo $usuario ?> value=<?php echo $usuario ?> required readonly="readonly"/>
			  	<input type="email" name="correo" id="name" placeholder=<?php echo $correo ?> value=<?php echo $correo ?> required readonly="readonly"/>
			  	<input type="password" name="pass" id="name" placeholder="Contraseña" required/>
			  	<input type="password" name="cpass" id="name" placeholder="Confirmar contraseña" required/>
			  	<input class="aRegistro" type="submit" name="login" value="Actualizar">
			</form>
		</div>
		<div>
		<hr/>		
	</body>
</html>



