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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="../../javascript/jquery.min.js"></script>
    <script src="../../javascript/moment.min.js"></script>
    <!--- full calendar-->
    <link rel="stylesheet" href="../../css/fullcalendar.min.css">
    <script src="../../javascript/fullcalendar.min.js"></script>
    <script src="../../javascript/es.js"></script>
    <title>Agenda</title>
</head>

<body>

    <div class="seccion1-agenda">

        <div class="banner">
    
             
        <a href="../../paginas/sesion_destroy.php">Cerrar Sesión</a>


        </div>
        
            <div class="banner2">
            <a href="../admin/usuarios.php">Usuarios</a><br/>
            <br/>
            <a href="../admin/agenda.php">Agenda</a>
            
            </div>
            
           <div class="contenido"> 
       
          
            <div class="container">
           
                <div class="row">
                <div class="col">
                </div>
                        <div class="col-7"> <div id="CalendarioWeb">

                                            </div>
                      </div>
            <div class="col">
            </div>

</div>
</div>
</div>
     <script>
        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                header:{
                    left:'today, prev,next',
                    center:'title',
                    right:'month,basicWeek,agendaWeek,agendaDay'
                }
            });
                });
            </script>      
</div>
    
              
    
    
 

</div>
</body>
</html>
