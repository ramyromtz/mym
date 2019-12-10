<?php
include("connect_toner.php");
$id=$_GET['id'];
$solicitud="DELETE FROM toner WHERE ID=$id";
$resultado=mysqli_query($conexion,$solicitud);

header("location:show_toner.php");
 ?>
