<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>actualizado</title>
</head>
<body>
<?php 
if (isset($_POST['actualizar'])) {
$cedula=$_POST['cedula'];
$estado;
$resultado;
if (isset($_POST['aprobado'])&&$_POST['aprobado']==TRUE) {
$estado="aprobado";
$resultado="listo";
require 'datos_conexion.php';

$mysqli = mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
	echo "Conexion fallida";
}
mysqli_set_charset($mysqli, "utf8");
mysqli_select_db($mysqli, $bd_nombre);
$consulta ="UPDATE examenes SET estado='$estado', resultado='$resultado' WHERE cedula='$cedula'";
$resultado=mysqli_query($mysqli, $consulta);
if ($resultado==TRUE) {echo"<center><h1>actualizado</h1></center><br>";
 } else {header('Location: http://localhost/laboratorio/pagina de actualizacion.php');}
}elseif (isset($_POST['contaminado']) && $_POST['contaminado']==TRUE) {
$estado="contaminado";
$resultado="rechasado";
require 'datos_conexion.php';

$mysqli = mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
	echo "Conexion fallida";
}
mysqli_set_charset($mysqli, "utf8");
mysqli_select_db($mysqli, $bd_nombre);
$consulta ="UPDATE examenes SET estado='$estado', resultado='$resultado' WHERE cedula='$cedula'";
$resultado=mysqli_query($mysqli, $consulta);
if ($resultado==TRUE) {echo"<center><h1>actualizado</h1></center><br>";
 } else {header('Location: http://localhost/laboratorio/pagina de actualizacion.php');}
}else {echo"<center><h1> no se pudo procesar</h1></center><br>";

}

}
?>
</body></html>