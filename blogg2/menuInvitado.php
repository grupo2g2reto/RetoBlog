<nav>

<script>
function mostrarOcultar(id){
var elemento = document.getElementById(id);
if(!elemento) {
return true;
}
if (elemento.style.display == "none") {
elemento.style.display = "block"
} else {
elemento.style.display = "none"
};
return true;
};
</script>

<ul>
	<li>Entrantes</li>
	<li>verdura</li>
	<li>carnes</li>
	<li>pescados</li>
	<li>postres</li>


	
	<ul id="listaLogin">
	<li id="lilogin"> <a onclick="return mostrarOcultar('testbox')" >Login</a></li>
	
		<div id="testbox" >
	      	<form action="accionLogin.php" method="post" >
			  <label>Usuario:</label>
		        <input type="text" name="usuario" id="name" placeholder="Usuario" required/>
				<label>Contraseña:</label>  
				<input type="password" name="pass" id="password" placeholder="Contraseña" required/>
		       <br> <a href="#" class="aLogin">Login</a>
	      	</form>
	    </div>
	</li>
	
	<li id="liregistro"><a href="registro.php">Registro</a></li>
	
	
	</ul>

</ul>
</nav>
<script type="text/javascript" src="JS/script.js"></script>