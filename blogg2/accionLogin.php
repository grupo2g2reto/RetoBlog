<?php
    try{
        session_start();
      
        $usuario=$_POST["usuario"];
        $pass=$_POST["pass"];

        include 'conexion.php';

//-------------------------------SELECCIONAR USUARIO-----------------------------------
        $sentencia=$db->prepare("SELECT pass FROM usuario WHERE idusuario = :usuario "); 
        $sentencia->bindParam(':usuario',$usuario, PDO::PARAM_STR);
        $sentencia->execute();
        $resultado=$sentencia->fetch(PDO::FETCH_ASSOC);
        $filas = $sentencia->rowCount();
        $encryptada="";
        if($filas >0){ 
            foreach($resultado as $clave){
                $encryptada = $clave;
            }
        }
        
        if(password_verify($pass, $encryptada)){
//-----------------------Aqui guardamos el usuario en la sesion para recuperarlo en comentarios
            $_SESSION['logueado']=true;
            $_SESSION['usuario']=$usuario;
            
             header ('Location:index.php'); 
             
        }else{
//-----------------------Aqui guardamos el usuario en la sesion para recuperarlo en comentarios
            $_SESSION['logueado']=false;
    
    
            echo ("<script>
            alert('Usuario o Password estan incorrectos. Vuelva a intentarlo.');
            window.location.href= 'index.php';
            </script>");
       
        } 
        $db=null;    
    }catch(PDOException $e) {
         $e = $e->getMessage();
    }      
?>
