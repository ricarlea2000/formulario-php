<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>menu de cliente</title>
</head>
<body>
<center><h1>menu de cliente </h1></center><br>
<center><form method="POST">
		<label for="">Buscar Registro del examen (Ingrese cedula)<input type="text" name="buscar" /></label>
		<input type="submit" name="busqueda"/>
	</form>
	<form action="paginacancelar.php" method="POST">
		<label for="">cancelacion de registro del examen ingrese</label><br>
		<label>cedula</label><input type="text" name="buscar2"/><br>
		<input type="submit" name="cancelar1"/>
	</form></center>
	
    <?php
if (isset($_POST['busqueda'])) {
	$buscar=$_POST['buscar'];
    $resultado="en espera";
require 'datos_conexion.php';
$conexion=mysqli_connect($servidor, $usuario, $contraseña);
if (mysqli_connect_errno()) {
	echo "Conexion fallida";
}
mysqli_select_db($conexion, $bd_nombre);
$consulta="SELECT * FROM examenes WHERE cedula LIKE '%".$buscar."%' AND resultado LIKE 'en espera'" ;
$producto=mysqli_query($conexion, $consulta);
echo "<center><h2>examenes</h2></center>";
echo "<center> <table border='1'></center>";
echo "<th>id</th>
		<th>Nombre</th>
		<th>Cedula</th>
		<th>Tipo de muestra</th>
		<th>fecha de entraga</th>
		<th>Tipo de examen</th>
		<th>precio</th>
		<th>Analista</th>
		<th>Estado de pago</th>
		<th>Resultado del Examen</th>
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
    </body>
    <html>