<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <title>Operaciones</title>
 </head>
 <header><h1><center>Calculadora</center></h1></header>
 <body style="background-image: url(imagenes/giphy.gif)">
 <style>
 body{
 background-size: cover;
 background-position: center;
 background-attachment: fixed;
 }
 </style>
 <center>
 <form action="" method="get">
 <h2>Número 1:
 <input type="number" name="n1" required value="" />
 </h2>
 <h2>Número 2:
 <input type="number" name="n2" value="" />
 </h2>
 <h2>Tipo de operacion:
 <select name="operacion">
 <option name="suma">Sumar</option>
 <option>Restar</option>
 <option>Multiplicar</option>
 <option>Dividir</option>
 </select></h2>
 <input type="submit" value="Resultado :"/>
 </form>
 </center>

 <?php
 include 'operaciones.php';
 $Operaciones = new operaciones();
 if(isset($_GET['operacion'])){
 $Operaciones->setNumero1($_GET['n1']);
 $Operaciones->setNumero2($_GET['n2']);
 if($_GET['operacion']=='Sumar'){
 echo"<center><strong>Resultado {$Operaciones->suma()}</strong></center>";
 }elseif($_GET['operacion']=='Restar'){
 echo"<center><strong>Resultado {$Operaciones->resta}</strong></center>";
 }elseif($_GET['operacion']=='Multiplicar'){
 echo"<center><strong>Resultado {$Operaciones->multiplicacion()}</strong></center>";
 }elseif($_GET['operacion']=='Dividir'){
 echo"<center><strong>Resultado {$Operaciones->division()}</strong></center>";
 }
 }
 ?>
 </body>
</html>