<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<title>Solicitud de Toner</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style0.css">
	</head>
	<body>
	<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
	<?php require 'partials/header.php'?>
	<h1> M&M Energy</h1>
		<h2><p align="center">Captura de Consumo de Diesel</h2-></p>
		<h3>Favor de revisar bien los datos</h3>
		<form action="addtoner.php" method="POST"/>
			<table boder="1" style="margin:0 auto;">
				<tr>
						<td>Folio</td>
						<td>
						<input required type="text" name="folio" />
						</td>
					</tr>

				<tr>
						<td>Fecha</td>
						<td>
						<input required type="date" name="fecha" />
						</td>
					</tr>

					<tr>
						<td>Nombre del Chofer:
						</td>
						<td>
						<input required type="text" name="nombre" placeholder="Nombre Empleado" />
						</td>
	 					</tr>
						<td>Tractor:
						</td>
						<td><select name="impresora">
							<option value="" disabled selected>Seleccione una opcion</option>
							<option value="FZN401">401</option>
							<option value="FZN402F">402F</option>
							<option value="FZN1169F">1169</option>
							<option value="FZN1605">1605</option>
							<option value="FZN1669F">166F</option>
							<option value="FZN1735">1735</option>
							<option value="FZN1754">1754</option>
							<option value="FZN2193">2193</option>
							<option value="FZN2194">2194</option>
							</select>
						</td>
					</tr>
						<tr>
						<td> Sellos:
						</td>
						<td>
						<input required type="text" name="sello" placeholder="Deja tu comentario" />
						</td>
						</tr>
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
