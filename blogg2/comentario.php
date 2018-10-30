
<html lang="en">

<head>
 <title>COMENTARIO</title>

 <meta charset = "utf-8">
</head>

<body>

<h1>COMENTARIOS</h1>
<hr/>

<form action="accionComentarios.php" method="post" >

<label>Titulo de la entrada:</label><br>
<input name="titulo" type="text"  required>
<br><br>


<label>Contenido:</label><br>
<textarea name="contenido"  cols="30" rows="10"></textarea>
<br><br>


<label>fecha:</label><br>
<input name="fecha" type="date"  required>
<br><br>

<label>Usuario:</label><br>
<input name="usuario" type="text"  required><br><br>


<input type="submit" name="insertar"  value="Enviar">

<?php
 include 'conexion.php';



try {
$sentencia=$db->prepare("SELECT * FROM comentario"); 
$sentencia->execute();

foreach($sentencia as $comentario){
    echo '<br>  Titulo de la entrada: ' . $comentario['titulo_entrada']. ' <br>Contenido: ' . $comentario['contenido'] . ' <br>Fecha: ' . $comentario['fecha'] . ' <br>Usuario: ' . $comentario['usuario_comentario'];
}
$db=null;
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