<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1, userscalable=no, width=device-width">
 <title>Practica3 (Switch)</title>
 </head>
 <body style="background-color:darkblue">
 <center>
 <?php
 $nTipomotor=3;
 switch($nTipomotor){
 case 0: echo"<h1 style=color:grey>No hay un valor definido para este tipo
de bomba.</h1>";
 break;
 case 1: echo"<h1 style=color:grey>La bomba es una bomba de
agua.</h1>";
 break;
 case 2: echo"<h1 style=color:grey>La bomba es una bomba de
gasolina.</h1>";
 break;
 case 3: echo"<h1 style=color:grey>La bomba es una bomba de
hormigón.</h1>";
 break;
 case 4: echo"<h1 style=color:grey>La bomba es una bomba de pasta
alimenticia.</h1>";
 break;
 default: echo"<h1 style=color:grey>No existe un valor válido para tipo de
bomba.</h1>";
 }
 ?>
 </center>
 </body>
</html>