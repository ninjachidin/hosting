<?php
 //datos para conexion de byethost
 $servidor = "sql304.byethost.com";
 $bd = "b7_25270468_Escuela";
 $usuario = "b7_25270468";
 $password = "Charly1064";
 echo"<h2>Conectarse a MySQL y nuestra base de datos en
byethost</h2><br>";

 //Conectarse a MySQL
 $conexion = mysqli_connect($servidor, $usuario, $password);
 if(!$conexion){
 exit("Error al conectarse a mysql: " . mysqli_error());
 }else{
 echo"Conectado a MySQL<br><br>";
 }

 //conectarse a nuestra bd
 $db_selected = mysqli_select_db($conexion, $bd);
 if(!$db_selected){
 exit("Error al abrir la bade datos: " . mysqli_error());
 }else{
 echo"Conexion a la base de datos exitosa.";
 }

 ?>
