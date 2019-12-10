<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<title>Lista de Tractores & Tanques </title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php	session_start();	echo "Bienvenido ".$_SESSION['usuario']."<br>";	echo "<a href='logout.php'> Cerrar Sesion</a>";	?>
<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
<?php require 'partials/header.php'?>
<h1> M&M Energy </h1>
<h2>Reporte de Unidades y Taques</h2>

<?php include("connect_tract.php");
  $solicitud="SELECT * FROM tractores";
	$resultado=mysqli_query($conexion,$solicitud);
	 echo " <table border='1'>
	 <tr>
	 	<td>Marca</td>
	 	<td>Modelo</td>
	 	<td>Año</td>
	 	<td>Serie</td>
	 	<td>Serie Motor</td>
	 	<td>Num Economico</td>
	 	<td>Capacidad</td>
	 	<td>placa</td>
	 	<td>Aseguradora</td>
	 	<td>Poliza</td>
	 	<td colspan='2'>Acciones</td>
	 	<tr>";

	while($fila=mysqli_fetch_array($resultado) )
	{
		echo "<tr>";
		echo "<td>" . $fila['marca']. "</td>";
		echo "<td>" . $fila['modelo']. "</td>";
		echo "<td>" . $fila['year']. "</td>";
		echo "<td>" . $fila['serie']. "</td>";
    echo "<td>" . $fila['motor']. "</td>";
    echo "<td>" . $fila['eco']. "</td>";
    echo "<td>" . $fila['capacidad']. "</td>";
    echo "<td>" . $fila['placa']. "</td>";
    echo "<td>" . $fila['compania']. "</td>";
    echo "<td>" . $fila['npoliza']. "</td>";
		echo "<td><a href='delete_tractor.php?id=".$fila['id']."'>eliminar</a></td>";
		echo "<td><a href='update_tract.php?id=".$fila['id']."'>modificar</a></td>";
	}


  ?>
<br><br>
</body>
</html>
