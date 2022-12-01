<?php
$hostname='localhost';
$database= 'nutrimike';
$username='root';
$password='';
try {
	// Creamos la variable $conn que usaremos en todo el proyecto web
	// En esta línea de abajo se usan las 4 variables de la conexión a la BD
	// PDO significa PHP DATA OBJECTS y es para conectarnos a las bases de datos
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	
	// Asignamos los atributos de conexión *********************************
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//Imprimimos en pantalla en caso de que si nos pudimos conectar a la Base de Datos
    //echo "<div align='center'><h1>Si me conecte</h1></div>";
    }
	
catch(PDOException $e)
    {
		
	//Imprimimos en pantalla cuando NO nos pudimos conectar a la Base de Datos
    echo "<div align='center'><h1>Nooooo me conecte: </h1></div> " . $e->getMessage();
    }
    ?>