<?php

try{
    session_start();
  
    $usuario=$_POST["usuario"];
    $pass=$_POST["pass"];

    include 'conexion.php';

    $sentencia=$db->prepare("SELECT pass FROM usuario WHERE idusuario = :usuario "); 
    $sentencia->bindParam(':usuario',$usuario, PDO::PARAM_STR);
    $sentencia->execute();

    $encryptada;

    $resultado=$sentencia->fetch(PDO::FETCH_ASSOC);
    foreach($resultado as $clave){
        $encryptada = $clave;
    }
    
    if(password_verify($pass, $encryptada)){
        //Aqui guardamos el usuario en la sesion para recuperarlo en comentarios
        $_SESSION['logueado']=true;
        $_SESSION['usuario']=$usuario;
       
         header ('Location:index.php'); 
         
    }else{
        //Aqui guardamos el usuario en la sesion para recuperarlo en comentarios
        $_SESSION['logueado']=false;
        echo "<link rel='stylesheet' href='CSS/estilo.css'>";
        echo "<p>Usuario o Password estan incorrectos.</p>";
        echo "<br><a href='index.php'>Volver a Intentarlo</a>";  
    } 
    $db=null;    
}catch(PDOException $e) {
     $e = $e->getMessage();
}


            

        
?>
