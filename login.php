<?php
include("conexion.php");

$nombre = htmlspecialchars($_POST["al"]);
$pass = htmlspecialchars($_POST["pw"]);

$query=mysqli_prepare("SELECT * FROM user, passwd FROM acceso WHERE al = ? AND pw = ?");
mysqli_stmt_bind_param($query, "s", $nombre);
mysqli_stmt_execute($query);

if(isset($_POST["btningresar"]));
{
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