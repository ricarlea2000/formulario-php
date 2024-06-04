<!DOCTYPE html>
<html>
<head>
	<title>pagina de registro</title>
</head>
<body>
<?php 
if(isset($_POST['enviar'] )) {
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$examenes;
$muestra;
$precio;
$estado="en proceso";
$resultado="en espera";
$analista;
if (isset($_POST['VIH']) &&$_POST['VIH']==TRUE && isset($_POST['sangre']) && $_POST['sangre']==TRUE) {
	$precio=6000;
	$analista="Dr Carlos Salazar";
	$muestra="sangre";
	$examenes="VIH";
	require ("datos_conexion.php");
$conexion=mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
echo "fallo conexion";

} else {echo "conexion exitosa" . "<br>";}
mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la db");
$consulta="INSERT INTO `examenes` (`nombre`, `cedula`, `tipo de muestra`, `tipo de examen`, `precio`, `analista`,`estado`,`resultado`) 
VALUES ('$nombre', '$cedula', '$muestra','$examenes', '$precio','$analista','$estado','$resultado')";
$resultado=mysqli_query($conexion, $consulta);
sleep(5);
if ($resultado==TRUE) {echo"<center><h1>registrado</h1></center><br>";
}else {echo"<center><h1> no se pudo procesar</h1></center><br>";
}
mysqli_close($conexion);
}elseif (isset($_POST['orina']) && $_POST['orina']==TRUE && isset($_POST['calculos']) && $_POST['calculos']==TRUE) {
	$precio=4000;
	$analista="Dr Angel Gusman";
	$muestra="orina";
	$examenes="calculos";
	require ("datos_conexion.php");
$conexion=mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
echo "fallo conexion";

} else {echo "conexion exitosa" . "<br>";}
mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la db");
$consulta="INSERT INTO `examenes` (`nombre`, `cedula`, `tipo de muestra`, `tipo de examen`, `precio`, `analista`,`estado`,`resultado`) 
VALUES ('$nombre', '$cedula', '$muestra','$examenes', '$precio','$analista','$estado','$resultado')";
$resultado=mysqli_query($conexion, $consulta);
sleep(5);
if ($resultado==TRUE) {echo"<center><h1>registrado</h1></center><br>";
}else {echo"<center><h1> no se pudo procesar</h1></center><br>";
}
mysqli_close($conexion);
}elseif ( isset($_POST['ADN'])&& $_POST['ADN']==TRUE &&isset($_POST['cabello']) && $_POST['cabello']==TRUE) {
	$precio=5000;
	$analista="Dr Yenny Perez";
	$muestra="cabello";
	$examenes="ADN";
	require ("datos_conexion.php");
$conexion=mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
echo "fallo conexion";

} else {echo "conexion exitosa" . "<br>";}
mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la bd");
$consulta="INSERT INTO `examenes` (`nombre`, `cedula`, `tipo de muestra`, `tipo de examen`, `precio`, `analista`,`estado`,`resultado`) 
VALUES ('$nombre', '$cedula', '$muestra','$examenes', '$precio','$analista','$estado','$resultado')";
$resultado=mysqli_query($conexion, $consulta);
if ($resultado==TRUE) {echo"<center><h1>registrado</h1></center><br>";
}else {echo"<center><h1> no se pudo procesar</h1></center><br>";
}
mysqli_close($conexion);

}elseif (isset($_POST['ADN']) && $_POST['ADN']==TRUE && isset($_POST['saliba'])&& $_POST['saliba']==TRUE) {
	$precio=5000;
	$analista="Dr Yenny Perez";
	$muestra="saliba";
	$examenes="ADN";
	require ("datos_conexion.php");
$conexion=mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
echo "fallo conexion";

} else {echo "conexion exitosa" . "<br>";}
mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la db");
$consulta="INSERT INTO `examenes` (`nombre`, `cedula`, `tipo de muestra`, `tipo de examen`, `precio`, `analista`,`estado`,`resultado`) 
VALUES ('$nombre', '$cedula', '$muestra','$examenes', '$precio','$analista','$estado','$resultado')";
$resultado=mysqli_query($conexion, $consulta);
sleep(5);
if ($resultado==TRUE) {echo"<center><h1>registrado</h1></center><br>";
}else {echo"<center><h1> no se pudo procesar</h1></center><br>";
}
mysqli_close($conexion); 
}else {echo"<center><h1> no se pudo procesar</h1></center><br>";
}
}else{header('Location: http://localhost/laboratorio/ingreso.php');
echo "tiene que determinar el examen";} 

 ?>

 	</body></html>