<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>borrado</title>
</head>
<body>
<?php 
if (isset($_POST['borrar2']))
$codigo=$_POST['cedula'];
require 'datos_conexion.php';

$mysqli = mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
	echo "Conexion fallida";
}
mysqli_set_charset($mysqli, "utf8");
mysqli_select_db($mysqli, $bd_nombre);
$consulta ="DELETE FROM examenes WHERE cedula='$codigo'";
$resultado=mysqli_query($mysqli, $consulta);
if ($resultado==true) {
	echo"<center><h1>borrado</h1></center><br>";

} else {header('Location: http://localhost/laboratorio/menu.php');
}

 ?>

 