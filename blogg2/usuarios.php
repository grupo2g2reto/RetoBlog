<?php
session_start();

include 'conexion.php'; 

        


try {
$sentencia=$db->prepare("SELECT * FROM usuario"); 
$sentencia->execute();
echo "<h3 class='h3titulo'>USUARIOS:</h3>";
$table = "<table cellpadding='10'>\n";
$table.="<tr>  
<th>USUARIO</th>
<th>CORREO</th>
<th>ELIMINAR</th></tr>";
foreach($sentencia as $usuario){

	$table.="<tr>
	<td>".$usuario['idusuario']."</td>
	<td>".$usuario['correo']."</td>
	<td><form action='' method='post' onsubmit='confirmarBorrarUsuario()'> \n
	<input type='hidden' name='idusuario' value='".$usuario['idusuario']."'>
	<input type='submit' value='Eliminar'>
	</form></td>
	</tr> \n";

}

$table.="</table>\n";

if (isset($_POST['idusuario']))
{
//Se almacena en una variable el nombre del registro a eliminar
$usuario = $_POST["idusuario"];

 echo "$usuario <br>";
$sql='DELETE FROM usuario WHERE idusuario="'.$usuario.'"';
$sentencia=$db->prepare($sql); 
$sentencia->execute([$usuario]);

//redirigir nuevamente a la página para ver el resultado
header("location: usuarios.php");
}

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel='stylesheet' href='CSS/estilo.css'>
	<script type="text/javascript" src="JS/script.js"></script>
</head>
<body>

<?php 
echo "<br><a class='avolver' href='index.php'> Volver </a>"	;
/* Mostrar la tabla con los registros */
echo $table; 

?>


</body>
</html>

<?php 
/* Cerrar la conexión */
$db=null;
?>



