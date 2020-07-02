<!DOCTYPE html>
<html>
	<body style="background-color: #6E6E6E">
</html>
<?php
	//conectamos Con el servidor
	include ("conexion.php");
	
	//recuperar las variables
	$matricula=$_POST['matricula'];
	$nombre=$_POST['nombre'];
	$materia=$_POST['materia'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO alumnos VALUES('$matricula',
								   '$nombre',
									'$materia')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		//echo"Datos Guardados Correctamente<br><a href='mostrar.php'>Volver</a>";
		if(isset($_POST['matricula'])){
		include("buscar1.php");
		}
		 
		include("mostrar.php");
		//echo"<br><a href='practica12.php'>Volver</a>";
		//echo"<br><a href='mostrar.php'>Volver</a>";
	}
?>