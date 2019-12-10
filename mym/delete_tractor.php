<?php
include("connect_tract.php");
$id=$_GET['id'];
$solicitud="DELETE FROM tractores WHERE ID=$id";
$resultado=mysqli_query($conexion,$solicitud);

header("location:show_tractores.php");
 ?>
