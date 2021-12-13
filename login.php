<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactando al equipo de ClickAr, podrás resolver todas tus dudas">
    <meta name="keywords" content="contacto, mensaje">

    <title class="sitios">Sitios Turísticos de Argentina :: Ingreso de usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Glory:ital,wght@1,100&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="icon" href="img/favicon.ico">
</head>

<body>
  
  <nav class="nav">
    <ul class="nav">
      <li><a href="index.html">Inicio</a></li>
      <li><a href="nosotros.html">Nosotros</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="contacto.html">Contacto</a></li>
    </ul> 
  </nav>
  
  <div class="container login-container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 text-center">
        <div class="login-in finish">
        <img class="avatar"  src="img/logocirculo.png" alt="logo">

        <?php

    $dni = isset($_POST["dni"]) ? $_POST["dni"] : null;
    $contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : null;

    echo " <p>Su Dni es <strong>$dni</strong>.</p>\n";
    echo "\n";

    include("datosDB.php");
    $conn = mysqli_connect($host,$usuario,$clave,$basededatos) or die ("Upps! no se ha podido conectar a la base de datos");
    $consulta = "SELECT * FROM usuario where dni='$dni' and password='$contraseña'";
    $resultado = mysqli_query ($conn, $consulta);

    if (mysqli_num_rows($resultado)) {
    echo "<p> Ha ingresado correctamente </p>";
    $_SESSION['dni'] = $_POST["dni"] ? $_POST["dni"] : null;
   } else{
         echo "<p>El DNI ingresado no se encuentra registrado</p>";
         echo '<a class="link" href="registro.html">Registrarse</a>';
}
    mysqli_close($conn);
    ?>
        
   </div>

      </div>
  </div>

    <footer class="footer">
        <p>Copyright ClickAr-Todos los derechos reservados-2021®</p><i class="bi bi-arrow-up-circle" id="flecha"></i>
    </footer>
  </div>

  <script type="text/javascript" src="./js/funcionesGrupo99.js"></script>
  <script type="text/javascript">
    document.getElementById('flecha').onclick = irAlCielo;
  </script>

</body>
</html>