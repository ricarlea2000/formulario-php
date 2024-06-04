<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>menu de usuario</title>
</head>
<body>
<?php 
if (isset($_POST['Mostrar'])) {
require 'datos_conexion.php';
$conexion=mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
	echo "Conexion fallida";
}
mysqli_select_db($conexion, $bd_nombre);
$consulta="SELECT * FROM examenes";
$producto=mysqli_query($conexion, $consulta);
echo "<center> <table border='1'</center>";
echo "<center><th>examenes</th></center>";
echo "<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Cedula</td>
		<td>Tipo de muestra</td>
		<td>fecha de entrega</td>
		<td>tipo de examen</td>
		<td>precio</td>
		<td>Analista</td>
		<td>Estado de pago</td>
		<td>Resultado del Examen</td>
	</tr>";
    while($fila=mysqli_fetch_row($producto)){
   echo "<tr>";
 echo "<td>" . $fila[0] . "</td>";
	echo "<td>" . $fila[1] . "</td>";
	echo "<td>" . $fila[2] . "</td>";
	echo "<td>" . $fila[3] . "</td>";
	echo "<td>" . $fila[4] . "</td>";
	echo "<td>" . $fila[5] . "</td>";
	echo "<td>" . $fila[6] . "</td>";
	echo "<td>" . $fila[7] . "</td>";
	echo "<td>" . $fila[8] . "</td>";
	echo "<td>" . $fila[9] . "</td>";
	echo "</tr>";
}
echo "</table></center>";
	mysqli_close($conexion);

}



 ?>
 </body></html>