<?php
session_start();
$varsesion = $_SESSION['login'];
if($varsesion == null || $varsesion=''){
echo 'Acceso No autorizado';
die();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<title>Bienvenido a M&M Energy </title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
echo "Bienvenido ".$_SESSION['login']."<br>";
echo "<a href='logout.php'> Cerrar Sesion</a>";
?>
<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
<?php require 'partials/header.php'?>
<h1> Bienvenido a M&M Admin </h1>

<h2>Por favor de elegir una actividad</h2>

<ul>
	<a href="toner.php">Solicitar un Toner</a>
	<br>
	<a href="show_toner.php">Revisar Pedidos de Toner</a>
	<br>
	<a href="rend.php">Consumos y Rendimientos</a>
	<br>
	<a href="tractores.php"> Agregar Tractor </a>
	<br>
	<a href="show_tractores.php"> Unidades y Tanques </a>
	</br>
	<br>
</ul>
<br>
<br>
<footer><small>
	Todos los derechos reservados. M&M Energy® 2019 Martinez Developers®
</small></footer>

</body>
</html>
