<?php
 //datos para conexion de byethost
 $servidor = "localhost";
 $bd = "miboutiq_escuela";
 $usuario = "miboutiq_chidin";
 $password = "putoluigi";

 //Conectarse a MySQL
 $conexion = mysqli_connect($servidor, $usuario, $password);
 //conectarse a nuestra bd
 $db_selected = mysqli_select_db($conexion, $bd);
 ?>