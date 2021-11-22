<?php
require_once("includes/connection.php");
session_start();
 if(isset($_POST["register"])){

 	if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['contraseña']) );

 		$nombre=$_POST['nombre'];
 	    $email=$_POST['email'];
 	    $apellido=$_POST['apellido'];
 	    $dni=$_POST['dni'];
 	    $contraseña=$_POST['contraseña'];

 	    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
 	    $query->brindParam("email", $email, PDO::PARAM_STR);
 	    $query->execute();

 	    if ($query->rowCount() > 0){
 	    	echo '<p class="error">El email ya se encuentra registrado</p>';
 	    }

 	    if($query->rowCount() ==0){
 	    	$query = $connection->prepare("INSERT INTO");
 	    }

 }