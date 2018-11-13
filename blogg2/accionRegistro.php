<?php
    include 'conexion.php';
    try{
//------------------------------------------COGER DATOS----------------------------------- 
        $usuario = $_POST["usuario"];
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
       
        $clave_cifrada;
//------------------------------------------SI LAS CONTRASEÑAS COINCIDEN-----------------
        if($pass == $cpass){
            $clave_cifrada = password_hash($pass, PASSWORD_DEFAULT, [10]);
            $sentencia=$db->prepare("INSERT INTO   usuario values (?,?,?);");
            $sentencia->execute([$usuario, $correo, $clave_cifrada]);
            header("Location:index.php");
            ?><script>alert(Registro con exito);</script><<?php
        }else{
//-----------------------------------------SI LAS CONTRASEÑAS NO COINCIDEN----------------
            echo "Las contraseñas no coinciden";
        }  
    }catch(PDOException $e){
       echo $sentencia . "<br>" . $e->getMessage();
    }
?>