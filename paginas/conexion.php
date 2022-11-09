<?php

$hostname='localhost';
$database= 'nutrimike';
$username='root';
$password='';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
echo "el Sitio web esta teniendo problemas";
}
?>