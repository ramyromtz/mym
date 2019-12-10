<?php
$host ="localhost";
$user ="root";
$pass="";
$name="users_pass";

$con = mysqli_connect($host,$user,$pass,$name);
if (!$con)
{
  die("Error en conexion: " .mysqli_connect_error());

}

$user = $_POST["login"];
$pass = $_POST["password"];

$query = mysqli_query($con,"SELECT * FROM users_pass WHERE USUARIOS = '".$user."' AND PASSWORD = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
{
session_start();
$_SESSION['login'] = "$user";
header('location: welcome.php');
}else if ($nr==0){
  echo "no ingreso";
}

 ?>
