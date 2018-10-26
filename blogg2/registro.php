<html lang="en">
	<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
		<link href="CSS/estilo.css" rel="stylesheet" type="text/css">
	  	<title>Login</title>
	  	<meta charset = "utf-8">
	</head>
	<body>
	

		<h1>Registro</h1>
		<div class="registro">
			<form action="accionRegistro.php" method="post">
				<label id="icon" ><i class="icon-user"></i></label>
			  	<input type="text" name="usuario" id="name" placeholder="Usuario" required/>
			  	<label id="icon" ><i class="icon-envelope "></i></label>
			  	<input type="text" name="correo" id="name" placeholder="Correo" required/>
			  	<label id="icon" ><i class="icon-shield"></i></label>
			  	<input type="password" name="pass" id="name" placeholder="Contraseña" required/>
				  <label id="icon" ><i class="icon-shield"></i></label>
			  	<input type="password" name="cpass" id="name" placeholder="Confirmar contraseña" required/>
			  	<input class="aRegistro" type="submit" name="login" value="REGISTRARSE">

			</form>
		</div>
		<hr/>
		<?php
			require_once('footer.html');
		?>
		
	</body>
</html>




