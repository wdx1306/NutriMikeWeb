<?php
    $user=$_POST['user'];
    $user_password=$_POST['contrasena'];
    session_start();
    $_SESSION['usuario']="$user";

    $conexion= mysqli_connect("localhost","root","","nutrimike");
    
    $sentencia="SELECT nombre, id_tipo FROM usuarios WHERE user='$user' AND contrasena='$user_password'";
    $resultado=mysqli_query($conexion,$sentencia);
	
    $filas=mysqli_fetch_array($resultado);

    if ($filas>0) {
      
      
if ($filas['id_tipo']=="1") {



    
  
  
           header('location:../admin/');
          } else if ($filas['id_tipo']=="2") {
            header('location:../user/');
          }
        

        }
    mysqli_free_result($resultado);
  mysqli_close($conexion);




?>