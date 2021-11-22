<?php

$host="localhost";
$usuario="root";
$clave="39719193vV.";
$basededatos="iefi";

$conn = new mysqli($host, $usuario, $clave, $basededatos);
mysqli_query($conn , "SET character_set_result=utf");
if($conn->connect_error){
	die("Database Error: " . $conn->connect_error);
}

?>