


<?php
session_start();

include 'conexion.php'; 

        


try {
$sentencia=$db->prepare("SELECT * FROM comentario"); 
$sentencia->execute();
echo "<h3 class='h3titulo'>COMENTARIOS:</h3>";
$table = "<table cellpadding='10'>\n";
$table.="<tr>  
<th>ID</th>
<th>TITULO</th>
<th>CONTENIDO</th>
<th>FECHA</th>
<th>USUARIO</th></tr>";
foreach($sentencia as $comentario){

	$table.="<tr>
	<td>".$comentario['numero_comentario']."</td>
	<td>".$comentario['titulo_entrada']."</td>
	<td>".$comentario['contenido']."</td>
	<td>".$comentario['fecha']."</td>
	<td>".$comentario['usuario_comentario']."</td>
	<td><form action='' method='post'> \n
	<input type='hidden' name='numero_comentario' value='".$comentario['numero_comentario']."'>
	<input type='submit' value='Eliminar'>
	</form></td>
	</tr> \n";

}

$table.="</table>\n";

if (isset($_POST["numero_comentario"]))
{
//Se almacena en una variable el id del registro a eliminar
$numero_comentario = $_POST["numero_comentario"];

 
$sentencia=$db->prepare("DELETE FROM comentario where numero_comentario=$numero_comentario"); 
$sentencia->execute([$numero_comentario]);

//redirigir nuevamente a la página para ver el resultado
header("location: comentarios.php");
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
</head>
<body>
<?php 

/* Mostrar la tabla con los registros */
echo $table; 
echo "<br><a class='avolver' href='index.php'> Volver </a>"	
?>


</body>
</html>

<?php 
/* Cerrar la conexión */
$db=null;
?>