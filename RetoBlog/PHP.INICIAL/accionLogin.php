<?php

try{
    session_start();
  
    $usuario=$_POST["usuario"];
    $pass=$_POST["pass"];

    include 'conexion.php';

    $sentencia=$db->prepare("SELECT pass FROM usuario WHERE usuario = :usuario "); 
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
        echo "Bienvenido! " . $_SESSION['usuario'];
        header ('Location:index.php');    
         
    }else{
        //Aqui guardamos el usuario en la sesion para recuperarlo en comentarios
        $_SESSION['logueado']=false;
        echo "Usuario o Password estan incorrectos.";
        echo "<br><a href='login.php'>Volver a Intentarlo</a>";  
    } 
        
}catch(PDOException $e) {
     $e = $e->getMessage();
}


            

        
?>
