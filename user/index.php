<?php
session_start();

if(isset($_SESSION['usuario'])){
  if($_SESSION['id_'] != "cliente" ){
    header("location:../admin/");
  }
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css">
    <title>Login</title>
</head>


<body>
    

     <h1>Usuario</h1>
</br>
</br>
<h2>Bienvenido  <?php echo $_SESSION['usuario']?></h2>

<a href="../paginas/sesion_destroy.php">Cerrar Sesión</a>

</html>