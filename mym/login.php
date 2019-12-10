<?php
$user="admin";
$password="123";

if($_POST['login']==$user && $_POST ['password']==$password){
  session_start();
  $_SESSION['usuario'] = "Administrador";
  header('location: welcome.php');
}else{
  echo "";
}
 ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
	<title>Login Error</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php require 'partials/header.php'?>
	<span> Error en el Login, ¿Deseas intentar nuevamente? <a href="index.php">Click aqui</span></a>
<br>
<FOOTER><small>
	Todos los derechos Reservados. M&M Energy® 2019 Martinez Developers®
</small></FOOTER>
</body>
</html>
