<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1, userscalable=no, width=device-width">
 <title>Practica 4.2 (do-while)</title>
 </head>
 <body>
 <center>
 <h1>Ciclo Do-While</h1>
 <?php
 $contador=50;
 do{
 echo"<strong>$contador, </strong>";
 $contador--;
 }while($contador>=40);
 ?>
 </center>
 </body>
</html>