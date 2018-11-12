<html lang="en">
	<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
		<link href="CSS/estilo.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="JS/script.js"></script>

	  	<title>Login</title>
	  	<meta charset = "utf-8">
	</head>
	<body>
		<?php
			require_once('cabecera.html');
			require_once('menuInvitado.php');
		?>
		<div id="cajaregistro">
		<h3>Registro</h3>
		<div class="registro">
		
			<form action="accionRegistro.php" method="post">
			
			  	<input type="text" name="usuario" id="usuario"  value="" oninput="return validarUsuario(this.value)" placeholder="Usuario" required/>
			  
			  	<input type="email" name="correo" id="correo" value="" oninput="return validarCorreo(this.value)"  placeholder="Correo" required/>
			 
			  	<input type="password" name="pass" id="pass"  value="" oninput="return validarPass(this.value)" placeholder="Contraseña" required/>
	
			  	<input type="password" name="cpass"  value=""  placeholder="Confirmar contraseña" required/>
			  	<input class="aRegistro" type="submit" name="login" value="REGISTRARSE">

			</form> 
		</div>
		<div>
		<hr/>
		<?php
//------------------------------------COMPROBAR QUE SE HAN INTRODUCIDO TODOS LOS CAMPOS
	    if(isset($_POST['enviar'])){
	        if($_POST['usuario'] == '' or $_POST['pass'] == '' or $_POST['cpass'] == '' or $_POST['email'] == ''){
	            echo 'Todos los campos son obligatorios.';
	        }
	        else{
	            $sql = 'SELECT * FROM usuarios';
//-------------------------------------SI COINCIDEN LAS CONTRASEÑAS
	      	    if($_POST['pass'] == $_POST['cpass']){
//--------------------------------------CARGAR DATOS
		            $usuario = $_POST['usuario'];
		            $pass = $_POST['pass'];
		            $correo=$_POST['correo'];
		            ?>
		            <script>
	         	    	var pass= '<?php $pass; ?>';
	                </script>
			        <?php    
//-----------------------------------INSERTAR USUARIO	
			            $sentencia=$db->prepare("INSERT INTO usuario (usuario,correo,pass) VALUES (?,?,?);"); 
						$sentencia->execute([$usuario,$correo,$pass]);        
	            }else{
	                echo 'Vuelva a introducir las contraseñas.';
	            }
	        }     
	    }
//-----------------------------------LLAMAR AL FOOTER
		require_once('footer.html');
		?>
	</body>
</html>



