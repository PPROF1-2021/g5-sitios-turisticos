<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/funcionesGrupo99.js"></script>
    <title>Guardar datos del usuario</title>
   </head>
   <body>
   	<p> <a href="index.html">Regresar</a> </p>
   	<input type="button" value="Volver" onclick="pVolver();"> <br>
   	<input type="button" value='Submit' id='submit' onclick='paginaRedirect();'> <br/>

   	<div id="mensaje"></div>

   	<?php

   	$nombre = $_POST["nombre"];
   	$apellido = $_POST["apellido"];
    $dni=$_POST['dni'];
   	$correo = $_POST["correo"];
   	$contraseña = $_POST["contraseña"];

   	print " <p>Su Nombre es <strong>$nombre</strong>.</p>\n";
   	print "\n";
   	print " <p>Su Apellido es <strong>$apellido</strong>.</p>\n";
   	print "\n";
    print " <p>Su Dni es <strong>$dni</strong>.</p>\n";
    print "\n";
   	print " <p>Su Correo es <strong>$correo</strong>.</p>\n";
   	print "\n";
   	print " <p>Su Contraseña es <strong>$contraseña</strong>.</p>\n";
   	print "\n";

   	include("datosDB.php");
   	$con = mysqli_connect($host,$usuario,$clave,$basededatos) or die ("Upps! no se ha podido conectar a la base de datos");
   	$consulta = "INSERT INTO usuario (Nombre, Apellido, dni, correo, Contraseña) VALUES ('$nombre', '$apellido', '$dni', '$correo', '$contraseña')";

   	if (mysqli_query ($con, $consulta)){
   	echo "<p> Registro agregado </p>";
   } else{
         echo "<p>No se agregó nuevo registro</p>";
         echo "Error: " . $consulta . "<br>" . mysqli_error($con);
}
    mysqli_close($con);

    ?>

   </body>