<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<title>Toners Solicitados </title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php	session_start();	echo "Bienvenido ".$_SESSION['usuario']."<br>";	echo "<a href='logout.php'> Cerrar Sesion</a>";	?>
<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
<?php require 'partials/header.php'?>
<h1> M&M Energy </h1>
<h2>Toner Solicitados</h2>

<?php
include("connect_toner.php");
  $solicitud="SELECT * FROM toner";
	$resultado=mysqli_query($conexion,$solicitud);
	 echo " <table border='1'> <tr><td>Empleado</td><td>Fecha</td><td>Impresora</td><td>Comentarios</td><td colspan='2'>Acciones</td><tr>";

	while($fila=mysqli_fetch_array($resultado) )
	{
		echo "<tr>";
		echo "<td>" . $fila['nombre']. "</td>";
		echo "<td>" . $fila['fecha']. "</td>";
		echo "<td>" . $fila['impresora']. "</td>";
		echo "<td>" . $fila['comentario']. "</td>";
		echo "<td><a href='delete_toner.php?id=".$fila['id']."'>eliminar</a></td>";
		echo "<td><a href='update_toner.php?id=".$fila['id']."'>modificar</a></td>";
	}


  ?>
<br><br>
</body>
</html>
