<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>menu de usuario</title>
</head>
<body>
<center><h1>menu de usario </h1></center><br>
	<center><form method="POST">
		<label for="">Mostrar registro</label>
		<input type="submit" name="Mostrar" />
		<label for="">Buscar Registro del examen (Ingrese cedula)<input type="text" name="buscar" /></label>
		<input type="submit" name="busqueda" />
	</form></center>
	<center><form action="ingreso.php" method="POST">
		<label>Registrar</label>
		<input type="submit" name="Registrar" />
	</form></center>
	<center><form action="pagina de actualizacion.php" method="POST">
		<label for="">Actualizar registro del examen ingrese</label><br>
		<label>cedula</label><input type="text" name="buscar2"/>
		<input type="submit" name="actualizar1"/>
	</form></center><br>
	<center><form action="pagina de borrador.php" method="post">
		<label>Borrar Registro del examen (Ingrese) <input type="text" name="borrador"/></label>	
		<input type="submit" name="borrar" value="borrar"/>
	</form></center>
	<center><form method="POST">
		
	</form>
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
$consulta="SELECT * FROM examenes WHERE cedula LIKE '%".$buscar."%'" ;
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
</html>




	
