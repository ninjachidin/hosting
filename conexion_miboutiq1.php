<?php
 //datos para conexion de byethost
 $servidor = "localhost";
 $bd = "miboutiq_escuela";
 $usuario = "miboutiq_chidin";
 $password = "putoluigi";
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
