<!DOCTYPE html>
<html>
<head>
	<title>ingreso de datos</title>
</head>
<body>
<center><h1>cancelacion de registro de registro</h1></center><br>
<?php
if (isset($_POST['cancelar1'])) {
	$busqueda = $_POST['buscar2'];
	
	require 'datos_conexion.php';
	
	$mysqli = mysqli_connect($servidor, $usuario, $contraseña);
	if (mysqli_connect_errno()) {
		echo "Conexion fallida";
	}
	mysqli_set_charset($mysqli, "utf8");
	mysqli_select_db($mysqli, $bd_nombre);
	$consulta = "SELECT * FROM examenes WHERE cedula LIKE '%".$busqueda."%' AND resultado LIKE 'en espera'";
	$resultado = mysqli_query($mysqli, $consulta);
	echo "<center><h2>examenes</h2></center>";
echo "<center> <table border='1'></center>";
echo "
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
	while ($fila = mysqli_fetch_assoc($resultado)) {
		echo "<tr>";
		echo "<td>" . $fila['nombre'] . "</td>";
		   echo "<td>" . $fila['cedula'] . "</td>";
		   echo "<td>" . $fila['tipo de muestra'] . "</td>";
		   echo "<td>" . $fila['fecha de entrega'] . "</td>";
		   echo "<td>" . $fila['tipo de examen'] . "</td>";
		   echo "<td>" . $fila['precio'] . "</td>";
		   echo "<td>" . $fila['analista'] . "</td>";
		   echo "<td>" . $fila['estado'] . "</td>";
		   echo "<td>" . $fila['resultado'] . "</td>";
		   echo "</tr>";
		   echo "<form action='f.php' method='POST'>";
		   echo"<input type='text' name='cedula' value='".$fila['cedula']."' readonly>";
		   echo"
		   <label>cancelar</label>
		   <input type='submit' name='actualizar' value='cancelar'>
		   </form>";


	}
}

?>
</body></html>