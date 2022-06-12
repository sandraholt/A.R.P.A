<?php
include("conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];

if(isset($_POST["bntingresar"]));
{
$query = mysqli_query($conexion, "SELECT user, passwd FROM acceso WHERE user = '$nombre' AND passwd = '$pass'");
$nr = mysqli_num_rows($query);
if($nr == 1)
{
echo "<script> alert('Bienvenido $nombre'); window.location = 'principal.html' </script>";
}
else
{
echo "<script> alert('El usuario no existe'); window.location = 'index.html' </script>";
}
}
?>
