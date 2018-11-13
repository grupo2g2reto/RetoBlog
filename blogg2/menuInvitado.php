<nav>
	<ul>
		<li><a href="index.php">Postres</a></li>
		<ul id="listaLogin">
			<li id="lilogin"> <a onclick="return mostrarOcultar('testbox')" >Login</a></li>
				<div id="testbox" >
			      	<form action="accionLogin.php" method="post" >
					  	<label>Usuario:</label>
				        <input type="text" name="usuario"  placeholder="Usuario" required/>
						<label>Contraseña:</label>  
						<input type="password" name="pass"  placeholder="Contraseña" required/>
						<br> 
						<input class="aLogin" type="submit" name="login" value="LOGIN">
			      	</form>
				</div>
			</li>
			<li id="liregistro"><a href="registro.php">Registro</a></li>
		</ul>
	</ul>
</nav>
