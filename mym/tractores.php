<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<title>Captura Tractor</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style0.css">
	</head>
	<body>
	<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
	<?php require 'partials/header.php'?>
	<h1> M&M Energy</h1>
		<h2><p align="center">Agregar Nuevo Tractor</h2-></p>
		<h3>Favor de revisar bien los datos</h3>
		<form action="addtractores.php" method="POST"/>
			<table boder="1" style="margin:0 auto;">
				<tr>
						<td>Marca</td>
						<td>
						<input required type="text" name="marca" />
						</td>
				</tr>

				<tr>
						<td>Modelo</td>
						<td>
						<input required type="text" name="modelo" />
						</td>
				</tr>

        <tr>
            <td>Año</td>
            <td>
            <input required type="text" name="year" />
            </td>
        </tr>

				<tr>
						<td>Serie:</td>
						<td>
						<input required type="text" name="serie"/>
						</td>
	 			</tr>
        <tr>
        		<td>Motor:</td>
						<td>
            <input required type="text" name="motor"/>
						</td>
        </tr>
				<tr>
						<td> Numero Economico:</td>
						<td>
						<input required type="text" name="eco" />
						</td>
        </tr>
        <tr>
						<td> Capacidad (m3):</td>
						<td>
						<input required type="text" name="capacidad" />
						</td>
  			</tr>
        <tr>
            <td> Placa: </td>
            <td>
              <input required type="text" name="placa"/>
            </td>
        </tr>
        <tr>
            <td> Compañia de Seguro: </td>
            <td>
              <input required type="text" name="compania"/>
            </td>
        </tr>
        <tr>
            <td> Numero de Poliza: </td>
            <td>
              <input required type="text" name="npoliza"/>
            </td>
        </tr>

						</table>
						<br><br>
			<input type="submit" name="submit" value = "Aceptar" />
			<input type="reset" name="" value="Borrar">
			</form>
			<br><br><br>
			<footer><small>
				Todos los derechos reservados. M&M Energy® 2019 Martinez Developers®
			</small></footer>
	</body>
	</html>
