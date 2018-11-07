<html lang="en">
	<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
		<link href="CSS/estilo.css" rel="stylesheet" type="text/css">
	  	<title>Login</title>
	  	<meta charset = "utf-8">
	</head>
	<body>
		<?php
			require_once('cabecera.html');
			require_once('menuInvitado.php');
		?>
		<h1>Registro</h1>
		<div class="registro">
			<form action="accionRegistro.php" method="post">
				<label id="icon" ><i class="icon-user"></i></label>
			  	<input type="text" name="usuario" id="name" placeholder="Usuario" required/>
			  	<label id="icon" ><i class="icon-envelope "></i></label>
			  	<input type="email" name="correo" id="name" placeholder="Correo" required/>
			  	<label id="icon" ><i class="icon-shield"></i></label>
			  	<input type="password" name="pass" id="name" placeholder="Contraseña" required/>
				  <label id="icon" ><i class="icon-shield"></i></label>
			  	<input type="password" name="cpass" id="name" placeholder="Confirmar contraseña" required/>
			  	<input class="aRegistro" type="submit" name="login" value="REGISTRARSE">

			</form>
		</div>
		<hr/>
		<?php
     //COMPROBAR QUE SE HAN INTRODUCIDO TODOS LOS CAMPOS
	    if(isset($_POST['enviar'])){
	        if($_POST['usuario'] == '' or $_POST['pass'] == '' or $_POST['cpass'] == '' or $_POST['email'] == ''){
	            echo 'Todos los campos son obligatorios.';
	        }
	        else{
	            $sql = 'SELECT * FROM usuarios';
	            $rec = mysql_query($sql);
	       	
	       		//COMPRUEBA SI COINCIDEN LAS CONTRASEÑAS
	      	    if($_POST['pass'] == $_POST['cpass']){
		                $usuario = $_POST['usuario'];
		                $pass = $_POST['pass'];
		                $correo=$_POST['correo'];
		                ?>
		                <script>
		                	var pass= '<?php $pass; ?>';
		                </script>
		                <?php
		                	if( ?> <script>/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(pass)</script> <?php ){
		                		$sentencia=$db->prepare("INSERT INTO usuario (usuario,correo,pass) VALUES (?,?,?);"); 
								$sentencia->execute([$usuario,$correo,$pass]);
		                	$sentencia = "INSERT INTO usuarios (usuario,pass,correo) VALUES ('$usuario','$pass','$correo')";
		                      mysql_query($sql);
		                      echo 'Usted se ha registrado correctamente.';	               
		                  	}else{
		                  		echo "la contraseña debe de contener...";
		                  	}
	                }
	                else{
	                    echo 'Vuelva a introducir las contraseñas.';
	                }
	            }
	              
	        }
			require_once('footer.html');
		?>
		
	</body>
</html>



