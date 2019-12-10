<?php
session_start();
session_unset();
session_destroy();
header('location:index.php');
 ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
	<title>Logout</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php require 'partials/header.php'?>
<br>
<FOOTER><small>
	Todos los derechos Reservados. M&M Energy® 2019 Martinez Developers®
</small></FOOTER>
</body>
</html>
