

<script>
	function usuarios(){
		var resultado="<?php echo usuario();?>";
		document.write(resultado);
	}

function entradas(){
		var resultado="<?php echo entrada();?>";
		document.write(resultado);
	}

function comentarios(){
		var resultado="<?php echo comentario();?>";
		document.write(resultado);
	}

</script>
<nav>
<ul>
	

	<li><a  onclick="usuarios()" id="usuario"></a></li>
	<li><a onclick="entradas()" id="entradas"></a></li> 
	<li><a onclick="comentarios()" id="comentarios"></a></li> 
	<script>

	document.getElementById("usuario").innerHTML = "Usuarios";
	document.getElementById("entradas").innerHTML = "Entradas";
	document.getElementById("comentarios").innerHTML = "Comentarios";
	
	</script>
	<li><a href="logout.php">Cerrar Sesión</a></li></ul>
	</nav>
<section>


<?php

function usuario(){
include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM usuario"); 
$sentencia->execute();
echo "<h3>USUARIOS:</h3>";
foreach($sentencia as $usuario){
    echo '<br>  <article id="entrada"> Usuario: ' . $usuario['usuario']. ' <br>Correo: ' . $usuario['correo'] . ' <br>Contraseña: ' . $usuario['pass'].' <button>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

}	
?>



<?php

function entrada(){
include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();
echo "<h3>ENTRADAS:</h3>";
foreach($sentencia as $entrada){
	
	echo '<br><article id="entrada"> Titulo: ' . $entrada['titulo']. ' <br>	Contenido: ' . $entrada['contenido'] . ' <br>Fecha: ' . $entrada['fecha_entrada'].' <br>Verificado: ' . $entrada['Verificado']. '<button>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

}	
?>




<?php
function comentario(){

include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM comentario"); 
$sentencia->execute();
echo "<h3>COMENTARIOS:</h3>";
foreach($sentencia as $comentario){
	
	echo '<br><article id="entrada"> Titulo: ' . $comentario['titulo_entrada']. ' <br>	Contenido: ' . $comentario['contenido'] . ' <br>Fecha: ' . $comentario['fecha'].'<br>Usuario: ' . $comentario['usuario_comentario'].'<br>Verificado: ' . $comentario['Verificado']. '<button>  BORRAR USUARIO </button></article><br>';
}
$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

}	
?>


</section>