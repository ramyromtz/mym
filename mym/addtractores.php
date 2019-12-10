<!--Obligar a poner datos-->
<?php
include("connect_tract.php");

	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
  	$year=$_POST['year'];
	$serie=$_POST['serie'];
	$motor=$_POST['motor'];
  	$eco=$_POST['eco'];
  	$capacidad=$_POST['capacidad'];
  	$placa=$_POST['placa'];
  	$compania=$_POST['compania'];
  	$npoliza=$_POST['npoliza'];

	$query="INSERT INTO tractores(marca,modelo,year,serie,motor,eco,capacidad,placa,compania,npoliza)VALUES ('$marca','$modelo','$year','$serie','$motor','$eco','$capacidad','$placa','$compania','$npoliza')";
	$resultado = $conexion-> query($query);

	if($resultado){

		echo "Captura Exitosa..!!";
		echo "<br>";
		echo "¿Deseas capturar otro tractor?";
		echo "<br>";
		echo "<br>";
		echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";
		}else{
		echo "Captura No exitosa :(";
			}
?>
