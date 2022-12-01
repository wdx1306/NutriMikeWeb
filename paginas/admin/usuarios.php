<?php
session_start();
require_once "../conn.php";
$result = "";
$sql1 = 'SELECT U.id_user,U.nombre, U.p_apellido,U.seg_apellido, T.Tipo FROM   usuarios U
INNER JOIN tipo_usuario T  ON U.id_tipo=T.id_tipo';
// Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
$result = $conn->query($sql1);

// Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
$rows = $result->fetchAll();
// Verificamos si está vacia la variable $smtp, si es positivo imprimimos en pantalla que no trae
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Style.css">
    <title>Usuarios</title>
</head>

<body>

    <div class="seccion1-login">

        <div class="banner">
    
             
        <a href="../../paginas/sesion_destroy.php">Cerrar Sesión</a>


        </div>
        
            <div class="banner2">
            <a href="../admin/usuarios.php">Usuarios</a><br/>
            <br/>
            <a href="../admin/agenda.php">Agenda</a>
            
            </div>
           
            <div class="conten">
            <h2 align='center'>Usuarios</h2>
</div>
            <div class="contenido">
          
          
    <table border="1" >
        <thead>
            <tr>
                <th class="sticky">ID Usuario</th>              
                <th class="sticky">Nombre(s)</th>
                <th class="sticky">Apellido Paterno</th> 
                <th class="sticky">Apellido Materno</th>
                <th class="sticky">Tipo de rol</th>  
                <th class="sticky">Actualizar</th>
                <th class="sticky">Eliminar</th>  
                
            </tr>
        </thead>
     
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página un renglon de tabla HTML por cada registro de tabla de MySQL
        ?>
            <tr>
                <td><?php echo $row['id_user']; ?></td>
            
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['p_apellido']; ?></td> 
                <td><?php echo $row['seg_apellido']; ?></td>
                <td><?php echo $row['Tipo']; ?></td>
                <td> <a href="../paginas/sesion_destroy.php"><img width="25" height="25"  src="../../imagenes/editar.png"  alt=""></a></td>
                <td> <a href="../paginas/sesion_destroy.php"><img width="25" height="50"  src="../../imagenes/eliminar.png"  alt=""></a></td>
            </tr>
                
               <?php } ?>
        
        </tbody>
    </table>

    

 <?php
			//Cerramos la conexion a la base de datos **********************************************
			$conn = null;
     ?>
    
            
                </div>
</div>
    
              
    
    
 

</div>
</body>
</html>
