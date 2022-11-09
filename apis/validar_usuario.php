<?php
 include 'conexion.php'; 
$user=$_POST['usuario'];
$user_password=$_POST['password'];
/*
$usu_usuario="jesus";
$usu_password="12345";
*/
$sentencia= $conexion->prepare("SELECT * FROM usuarios WHERE user=? AND user_password=?");
$sentencia->bind_param('ss',$user,$user_password);
$sentencia->execute();

$resultado=$sentencia->get_result();
if($fila= $resultado->fetch_assoc()){
	echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$conexion->close();
?>