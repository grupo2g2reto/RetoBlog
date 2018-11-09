<?php
session_start();

include 'conexion.php'; 

        


try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();
echo "<h3 class='h3titulo'>ENTRADAS:</h3>";
$table = "<table cellpadding='10'>\n";
$table.="<tr>  
<th>TITULO</th>
<th>CONTENIDO</th>
<th>FECHA</th>
<th>ELIMINAR</th></tr>";
foreach($sentencia as $entrada){

	$table.="<tr>
	<td>".$entrada['titulo']."</td>
	<td>".$entrada['contenido']."</td>
	<td>".$entrada['fecha_entrada']."</td>
	<td><form action='' method='post'> \n
	<input type='hidden' name='titulo' value='".$entrada['titulo']."'>
	<input type='submit' value='Eliminar'>
	</form></td>
	</tr> \n";

}

$table.="</table>\n";

if (isset($_POST["titulo"]))
{
//Se almacena en una variable el id del registro a eliminar
$titulo = $_POST["titulo"];

 
$sentencia=$db->prepare("DELETE FROM entrada where titulo=$titulo"); 
$sentencia->execute([$titulo]);

//redirigir nuevamente a la página para ver el resultado
header("location: entradas.php");
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
