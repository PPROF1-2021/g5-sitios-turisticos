<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/funcionesGrupo99.js"></script>
    <title>Ingreso de usuario</title>
   </head>
   <body>
   	<p> <a href="index.html">Regresar</a> </p>
   	<input type="button" value="Volver" onclick="pVolver();"> <br>
   	<input type="button" value='Submit' id='submit' onclick='paginaRedirect();'> <br/>

   	<div id="mensaje"></div>

    <?php

    $dni = $_POST["dni"];
    $contraseña = $_POST["contraseña"];
        session_start();
        $_SESSION['dni']=$dni;


    print " <p>Su Dni es <strong>$dni</strong>.</p>\n";
    print "\n";
    print " <p>Su Contraseña es <strong>$contraseña</strong>.</p>\n";
    print "\n";

    include("datosDB.php");
    $conn = mysqli_connect($host,$usuario,$clave,$basededatos) or die ("Upps! no se ha podido conectar a la base de datos");
    $consulta = "SELECT*FROM usuario where dni='$dni' and contraseña='$contraseña'";

    if (mysqli_query ($conn, $consulta)){
    echo "<p> Ha ingresado correctamente </p>";
   } else{
         echo "<p>Usted no ha ingresado</p>";
         echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}
    mysqli_close($conn);
    ?>
</body>
</html>