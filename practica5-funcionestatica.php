<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximumscale=1, user-scalable=no, width=device-width">
 <title>Practica 5 funcion estatica</title>
 </head>
 <body>
 <center>
 <?php
 function
operacioncuadrado($lado=5,$area=0,$perimetro=0)
 {
 $area=$lado*$lado;
 $perimetro=$lado+$lado+$lado;
 echo"<strong>Resultado del área del Cuadrado:
</strong><br>";
 echo"$area<br><br>";
 echo"<strong>Resultado del perímetro del
cuadrado:<br></strong>";
 echo$perimetro;
 }

 operacioncuadrado();
 ?>
 </center>


 </body>
</html>