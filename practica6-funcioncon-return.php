<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximumscale=1, user-scalable=no, width=device-width">
 <title>Practica 6 funcion con return</title>
 </head>
 <body>
 <center>
 <?php

 function operacionarea($n1)
 {
 $resularea=$n1*$n1;
 return $resularea;
 }

 function operacionperimetro($n1)
 {
 $resulperi=$n1+$n1+$n1;
 return $resulperi;
 }

 echo"<strong>Resultado del área del
Cuadrado</strong><br>",(operacionarea(5));

 echo"<br><br><strong>Resultado del perímetro del
Cuadrado</strong><br>",
 (operacionperimetro(7));
 ?>
 </center>
 </body>
</html>