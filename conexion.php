<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "partes";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conexion)
{
die("No hay conexion: " . mysqli_connect_error());
}
?>
