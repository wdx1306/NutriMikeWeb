<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
</head>
<body>
<h2>Bienvenido  <?php echo $_SESSION['nombre']?></h2>


<a href="../paginas/sesion_destroy.php">Cerrar Sesión</a>
</body>
</html>