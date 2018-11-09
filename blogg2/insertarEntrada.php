<html lang="en">

<head>
 <title>ENTRADA</title>

 <meta charset = "utf-8">
 <link rel="stylesheet" href="CSS/estilo.css">	
</head>

<body>

<h1>ENTRADAS</h1>
<hr/>

<form class="form" action="accionEntrada.php" method="post" >

<label>Titulo:</label><br>
<input name="titulo" type="text"  required>
<br><br>

<label>Contenido:</label><br>
<textarea name="contenido"  cols="30" rows="10"></textarea>
<br><br>


<!-- <label>fecha:</label><br>
<input name="fecha" type="date"  required>
<br><br> -->


<input type="submit" class="boton" name="insertar"  value="Enviar">


</form>
<hr />

 </body>
</html>
