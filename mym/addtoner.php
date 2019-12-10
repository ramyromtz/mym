<!--Obligar a poner datos-->
<?php
include("connect_toner.php");

	$fecha=$_POST['fecha'];
	$nombre=$_POST['nombre'];
	$impresora=$_POST['impresora'];
	$comentario=$_POST['comentario'];

	$query="INSERT INTO toner(nombre,fecha,impresora,comentario)VALUES ('$nombre','$fecha','$impresora','$comentario')";
	$resultado = $conexion-> query($query);

	if($resultado){

		echo "Captura Exitosa..!!";
		echo "<br>";
		echo "¿Deseas Capturar un toner nuevamente?";
		echo "<br>";
		echo "<br>";
		echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";
		}else{
		echo "Captura No exitosa :(";
			}
?>
