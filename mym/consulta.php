<?php
include("connect_tract.php");

$con = mysqli_connect($servidor,$usuario,$contrasena)
or die ("problemas al conectar server");

mysql_select_db($basededatos,$con)
or die ("problemas al conectar base de datos")

$registro = mysql_query("SELECT * FROM tractores")
or die ("Problemas en consulta");

while($reg=mysql_fetch_array($registro)){
echo $reg

}





 ?>
