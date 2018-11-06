<?php

include 'conexion.php';
try{
    
 
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
  
   
    $clave_cifrada;
    if($pass != $cpass){
            echo "Las contraseñas no coinciden";
    }else{
        $clave_cifrada = password_hash($pass, PASSWORD_DEFAULT, [10]);
        $sentencia=$db->prepare("INSERT INTO   usuario values (?,?,?);");
        $sentencia->execute([$usuario, $correo, $clave_cifrada]);
        header("Location:index.php");
        ?><script>alert(Registro con exito);</script><<?php
    }
    

   }catch(PDOException $e){
   echo $sentencia . "<br>" . $e->getMessage();
}

?>