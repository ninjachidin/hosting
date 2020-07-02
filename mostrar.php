<?php //Abrimos php
	//hacemos la conexion para la base de datos:
	include ("conexion.php");
	//Se Hace la sentencia sql:
	$sql="SELECT * FROM log_alumnos"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysqli_query($conexion,$sql);
	//traenos todos los valores en un array:
	$datos=mysqli_fetch_array($ejecutar);
	//imprimimos los datos de manera dinamica
	
	echo "<table width=\"50%\" border=\"1\" style=background-color:#E6E6E6 align=\"center\">";
	echo"<h2><center>Datos de log</center></h2>";
	echo"<tr>";
	echo "<th align='center'><b>Matricula</th>";
	echo "<th align='center'><b>Fecha y Hora</th>";
	echo "<th align='center'><b>Nombre</th>";
	echo "<th align='center'><b>materia</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
		echo"<td>$datos[3]</td>";
		echo"</tr>";
		$datos=mysqli_fetch_array($ejecutar);
	}
	echo "</table>";
	echo"<br><a href='practica12.php'>Volver</a>";
	mysqli_close($conexion);
?>