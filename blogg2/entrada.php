<html lang="en">

<head>
 <title>ENTRADA</title>

 <meta charset = "utf-8">
</head>

<body>

<h1>ENTRADAS</h1>
<hr/>

<form action="accionEntrada.php" method="post" >

<label>Titulo:</label><br>
<input name="titulo" type="text"  required>
<br><br>

<label>Contenido:</label><br>
<textarea name="contenido"  cols="30" rows="10"></textarea>
<br><br>


<label>fecha:</label><br>
<input name="fecha" type="date"  required>
<br><br>


<input type="submit" name="insertar"  value="Enviar">



<?php
include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM entrada"); 
$sentencia->execute();

foreach($sentencia as $entrada){
    echo '<br>Titulo: ' . $entrada['titulo'] . '<br>  Contenido: ' . $entrada['contenido']. ' <br>Fecha: ' . $entrada['fecha_entrada'];
}
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
} 

?>

</form>
<hr />

<footer>
 
</footer>

 </body>
</html>
