<?php

    $usuario = "miboutiq_chidin"; //en ste caso root por ser localhost
    $password = "putoluigi";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="miboutiq_reservas"; //nombre de la base de datos



$conexion = mysqli_connect  ($servidor,$usuario,$password) or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



    $nombre=$_POST['nombre']; 
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];


     $sql="INSERT INTO sugerencia VALUES ('$nombre','$email','$mensaje')"; 

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
         echo '<script>alert("huvo algun error")</script> ';
         echo "<script>location.href='contacto.php'</script>";   
    }else{
        echo '<script>alert("Su mensaje fue enviado correctamente ")</script> ';
        
        echo "<script>location.href='inicio.php'</script>";  
    }
     
?>﻿