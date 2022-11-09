<?php
    $user=$_POST['usuario'];
    $user_password=$_POST['password'];
    session_start();
    $_SESSION['usuario']="$user";

    $conexion= mysqli_connect("localhost","root","","nutrimike");
    
    $sentencia="SELECT nombre, id_tipo FROM usuarios WHERE user='$user' AND contrasena='$user_password'";
    $resultado=mysqli_query($conexion,$sentencia);
	
    $filas=mysqli_fetch_array($resultado);
 
    if ($filas>0) {
        $resul=mysqli_fetch_array($resultado);
        $_SESSION['nombre']=$resul['nombre'];
if ($resul['id_tipo']=="admin") {
    
    
  
  
           header('location:../admin/');
          } else if ($filas['id_tipo']=="cliente") {
            header('location:../user/');
          }
        

        }
    mysqli_free_result($resultado);
  mysqli_close($conexion);




?>