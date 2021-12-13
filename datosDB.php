<?php

$host="fdb31.batcave.net";
$usuario="3939467_sitios";
$clave="Diciembre22/";
$basededatos="3939467_sitios";

$conn = new mysqli($host, $usuario, $clave, $basededatos);
mysqli_query($conn , "SET character_set_result=utf");
if($conn->connect_error){
	die("Database Error: " . $conn->connect_error);
}

?>