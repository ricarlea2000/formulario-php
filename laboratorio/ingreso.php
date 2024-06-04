<!DOCTYPE html>
<html>
<head>
	<title>ingreso de datos</title>
</head>
<body>
	<center><h1>ingrese datos para el examen</h1></center><br>
	<form action="x.php" method="POST">
		<center><tr>
	<td>Nombre:<td>
	<td><input type="text" name="nombre" id="nombre" value="" placeholder="Nombre"></td><br>

		</tr></center>

<center><tr>
	<td>Cedula:</td>
	<td><input type="text" name="cedula" id="cedula" value="" placeholder="Cedula"></td><br>

</tr></center>
<center><tr>
	<td><label>tipos de muestra</label></td><br>
	<td>sangre<input type="checkbox" name="sangre" id="sangre" value="sangre"></td>
	<td>orina<input type="checkbox" name="orina" id="orina" value="orina" ></td>
    <td>cabello<input type="checkbox" name="cabello" id="cabello" value="cabello" ></td>
   <td>saliba<input type="checkbox" name="saliba" id="saliba" value="saliba" ></td>
</tr></center>

<center><tr>
	<td><label>tipos de examenes</label></td><br>
	<td>VIH<input type="checkbox" name="VIH" id="VIH" value="cabello" >precio:6000</td><br>
	<td>ADN<input type="checkbox" name="ADN" id="ADN" value="ADN" >precio:5000</td><br>
	<td>calculos<input type="checkbox" name="calculos" id="calculos" value="calculos" >precio:4000</td><br>
</tr></center>
<center><tr><td><input class="btn btn-succes" type="submit" name="enviar" id="enviar" value="Enviar"></td></tr><center>
	</form>
	
</body>
</html>
