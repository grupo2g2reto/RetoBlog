<?php

include 'conexion.php';
try{
    
 
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
  
    $clave_cifrada;
    if($pass != $cpass){
            echo "Las contraseñas no coinciden";
    }else{
        $clave_cifrada = password_hash($pass, PASSWORD_DEFAULT, [10]);
        $sql='UPDATE usuario SET pass="'.$clave_cifrada.'" WHERE idusuario="'.$usuario.'"';
        echo $sql;
        $sentencia=$db->prepare($sql);
        $sentencia->execute([$usuario]);
        header("Location:index.php");
        ?><script>alert(Actualizado con exito);</script><<?php
    }
    

   }catch(PDOException $e){
   echo $sentencia . "<br>" . $e->getMessage();
}

?>