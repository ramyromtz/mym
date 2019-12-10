<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
	<title>Entrar a Sistema</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php require 'partials/header.php'?>
	<h1> Favor de ingresar tu credencial </h1>
	<span> o si no estas registrado <a href="signup.php">Click aqui</span></a>

<form method="POST" action="loginn.php">
	<input type="text" name="login" placeholder="usuario">
	<input type="password" name="password" placeholder="password">
	<input type="submit" value="Entrar">
</from><br>

<FOOTER><small>
	Todos los derechos Reservados. M&M Energy® 2019 Martinez Developers®
</small></FOOTER>
</body>
</html>
