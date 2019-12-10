<?php
include("connect_tract.php");
$id=$_GET['id'];
$solicitud ="SELECT * FROM tractores WHERE ID=$id";
$resultado =mysqli_query($conexion,$solicitud);

?>

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
		<h2><p align="center">Actualizacion de Toner M&M</h2-></p>
		<h3>Favor de revisar bien los datos</h3>

<form method="POST" action="uptract.php">
<?php
while ($fila = mysqli_fetch_array($resultado)) {
	echo "Marca: <input type='text'; name='marca' value=' ".$fila['marca']."'> <br> ";
	echo "Modelo: <input type='text'; name='modelo' value=' ".$fila['modelo']."'> <br> ";
	echo "Año: <input type='text'; name='year' value=' ".$fila['year']."'> <br> ";
	echo "Serie: <input type='text'; name='serie' value=' ".$fila['serie']."'> <br> ";
	echo "Motor: <input type='text'; name='motor' value=' ".$fila['motor']."'> <br> ";
	echo "Numero Economico: <input type='text'; name='eco' value=' ".$fila['eco']."'> <br> ";
	echo "Capacidad m3: <input type='text'; name='capacidad' value=' ".$fila['capacidad']."'> <br> ";
	echo "Placa: <input type='text'; name='placa' value=' ".$fila['placa']."'> <br> ";
	echo "Compania Aseguradora: <input type='text'; name='compania' value=' ".$fila['compania']."'> <br> ";
	echo "Numero de Poliza: <input type='text'; name='npoliza' value=' ".$fila['npoliza']."'> <br> ";
	echo "<input type='hidden' name='id' value='".$id."'><br>";
	}
?>
<input type="submit" name="ENVIAR" value="Actualizar">
</form>
  <br><br><br>
  <footer><small>
    Todos los derechos reservados. M&M Energy® 2019 Martinez Developers®
  </small></footer>
</body>
</html>
