<?php
session_start();

include 'conexion.php';

$titulo=$_POST['titulo'];

$tituloC=$_POST['tituloC'];
     
$usuario=$_POST['usuario']; 

$pass=$_POST['pass']; 



function borrarEntrada($titulo){
try {


$sentencia=$db->prepare("DELETE FROM entrada where titulo=$titulo"); 
$sentencia->execute([$titulo]);

$db=null;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
 
}

function borrarComentario($tituloC){
    try {
    
    
    $sentencia=$db->prepare("DELETE FROM entrada where titulo_entrada=$tituloC"); 
    $sentencia->execute([$tituloC]);
    
    $db=null;
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
     
    }

    function borrarUsuarios($usuario){
        try {
        
        
        $sentencia=$db->prepare("DELETE FROM usuario where usuario=$usuario"); 
        $sentencia->execute([$usuario]);
        
        $db=null;
        } catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }
         
        }

    
    function actualizarUsuarios($usuario,$pass){
        try {
        
        
        $sentencia=$db->prepare("UPDATE usuario SET pass=$pass where usuario=$usuario"); 
        $sentencia->execute([$usuario]);
        
        $db=null;
        } catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }
         
        }
    


?>