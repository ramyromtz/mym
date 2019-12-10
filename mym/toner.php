<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagenes/logoico.ico">
	<title>Solicitud de Toner</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style0.css">
	</head>
	<body>
		<?php
		session_start();
		echo "Bienvenido ".$_SESSION['usuario']."<br>";
		echo "<a href='logout.php'> Cerrar Sesion</a>";
		?>
	<p align="center"><img src="imagenes/logomymenergy.png" alt="logomymenergy" text align="center"> </p>
	<?php require 'partials/header.php'?>
	<h1> M&M Energy</h1>
		<h2><p align="center">Solicitud de Toner M&M</h2-></p>
		<h3>Favor de revisar bien los datos</h3>
		<form action="addtoner.php" method="POST"/>
			<table boder="1" style="margin:0 auto;">
				<tr>
						<td>Fecha</td>
						<td>
						<input required type="date" name="fecha" />
						</td>
					</tr>

					<tr>
						<td>Nombre del empleado:
						</td>
						<td>
						<input required type="text" name="nombre" placeholder="Nombre Empleado" />
						</td>
	 					</tr>
						<td>Marca y Modelo de Impresora:
						</td>
						<td><select name="impresora">
							<option value="" disabled selected>Seleccione una opcion</option>
							<option value="HP Laser Jet P1005 0774">Hp Laser Jet P1005 0774</option>
							<option value="HP Laser Jet Pro M102w 0329">Hp Laser Jet M102w 0329</option>
							<option value="HP Laser Jet Pro M102w 7245">Hp Laser Jet M102w 7245</option>
							<option value="HP Laser Jet Pro M102w 6684">Hp Laser Jet M102w 6684</option>
							<option value="HP Laser Jet Pro M102w GAMM">Hp Laser Jet M102w GAMM</option>
							<option value="HP Laser Jet P1102w 6461">Hp Laser Jet P1102w 6461</option>
							<option value="HP Laser Jet P1102w Operaciones">Hp Laser Jet P1102w Operaciones</option>
							<option value="HP Laser Jet P1102W 0774">Hp Laser Jet P1005 0774</option>
							<option value="HP Laser Jet CP1025nw color LCMM"> Hp Laser Jet CP1025nw color LCMM</option>
							<option value="HP DeskJet Ink Advantage 4675 B09R">Hp DeskJet Ink Advantage 4675 B09R</option>
							<option value="EPSON L395">EPSON L395 0733 </option>
							<option value="Ricoh MP501">Ricoh MP501 7441 </option>
							<option value="Ricoh MP501">Ricoh MP501 5626 </option>
							<option value="Ricoh MP501">Ricoh MP501 6935 </option>
							<option value="Ricoh SP5200s">Ricoh SP5200s 0758</option>
							<option value="HP Ink Tank 115">Hp Ink Tank 115 F3BM</option>
							</select>
						</td>
					</tr>
						<tr>
						<td> Comentarios:
						</td>
						<td>
						<input required type="text" name="comentario" placeholder="Deja tu comentario" />
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
