<?php
/*
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['id_tipo']=="admin"){
        header('location:../admin/');
    } else if($_SESSION['id_tipo']=="cliente"){
        header('location:../user/');
}
}*/
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

    <div class="seccion1-login">

        <div class="login">

            <form action="validar.php" method="post" id="panel">
                <!--paginas/validacion.php-->


                <br/>
                <div class="input-container">
                    <h1 class="titulo-login">Login</h1>
                    <p class="text-user">Usuario:</p>

                    <img class="icon-user" src="../imagenes/user.png" alt="User">

                    <input class="input-field-user" type="text" placeholder="Ingresa tu Usuario" name="usuario" id="usuario">

                    <br />
                    <br />
                    <p class="text-password">Password:</p>
                    <img class="icon-password" src="../imagenes/password.png" alt="User">
                    <input class="input-field-password" type="password" placeholder="Ingresa tu Contraseña" name="password" id="password">
                    <br/>
                    <br/>
    
                    <input style="cursor: pointer" class="button" type="submit" name="btn_confirmar" id="selecccion" value="Iniciar Sesion" onclick="" />
</br>
</br>
<div class="fallo"><?php
        if(isset($_GET["fallo"]) && ($_GET["fallo"])){
            echo "<div 'top:0px'
            style='color:red'>Usuario o contraseña incorrecta </div>";
        }
    ?>   </div>


                </div>

                <br />
                <br />
                

                <br/>




              
            </form>
            

        </div>


    </div>


    </div>
</body>

</html>