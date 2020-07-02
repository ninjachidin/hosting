<?php
include ("conexion.php");
$matricula = $_POST['matricula'];
$query = "SELECT * FROM `alumnos` WHERE `Matricula`= '$matricula'";
 $registro=mysqli_query($conexion, $query);
 $datos= mysqli_fetch_array($registro);
 if(mysqli_num_rows($registro)>0){
 echo"<h2><center>Dato ingresado</center></h2>";
 echo "<center>
 <table width=\"50%\" border=\"1\" style=background-color:#E6E6E6>
 <tr>
 <td><center>Matricula</center></td>
 <td><center>Nombre</center></td>
 <td><center>Materia</center></td>
 </center>
 </tr>
 <tr>
 <td><center>".$datos['Matricula']."</center></td>
 <td><center>".$datos['Nombre']."</center></td>
 <td><center>".$datos['Materia']."</center></td>
 </tr>
 </table>";
 }else{
 echo"<h1><center>No existe registro con el numero $matricula de
matricula</center></h1>";
 }
 mysqli_close($conexion);
?>