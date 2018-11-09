<html lang="en">
	<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
		<link href="CSS/estilo.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="JS/script.js"></script>
	  	<title>Actualizar Usuario</title>
	  	<meta charset = "utf-8">
	</head>
	<body>
		<?php
			require_once('cabecera.html');
			require_once('menuAdministrador.php');
			$usuario = $_POST["idusuario"];
			$correo = $_POST["correo"];
		?>
		<div id="cajaregistro">
		<h3>Actualizar Usuario</h3>
		<div class="registro">
			<form action="accionActualizarUsuario.php" method="post">
				<label id="icon" ><i class="icon-user"></i></label>
			  	<input type="text" name="usuario" id="name" placeholder=<?php echo $usuario ?> value=<?php echo $usuario ?> required readonly="readonly"/>
			  	<label id="icon" ><i class="icon-envelope "></i></label>
			  	<input type="email" name="correo" id="name" placeholder=<?php echo $correo ?> value=<?php echo $correo ?> required readonly="readonly"/>
			  	<label id="icon" ><i class="icon-shield"></i></label>
			  	<input type="password" name="pass" id="name" placeholder="Contraseña" required/>
				<label id="icon" ><i class="icon-shield"></i></label>
			  	<input type="password" name="cpass" id="name" placeholder="Confirmar contraseña" required/>
			  	<input class="aRegistro" type="submit" name="login" value="Actualizar">

			</form>
		</div>
		<div>
		<hr/>		
	</body>
</html>



