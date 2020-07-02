<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1, userscalable=no, width=device-width">
 <title>Practica2 (if/else/ternario)</title>
 </head>
 <body>
 <center>
 <?php
 $sTipo="carro"; $nPrecio=500000; $sMarca="BMW";
 echo"<div style=background-color:green><h2>Resultado Con Sentencia
if</div></h2><br>";
 if($nPrecio>=500000){
 echo"Compra un $sMarca";
 }else{
 echo"Compra un carro más pequeño";}
 ?>
 <br><br><br>
 <?php
 $sTipo="carro"; $nPrecio=5000001; $sMarca="BMW";
 echo"<div style=background-color:red><h2>Resultado Con Sentencia
if/else</div></h2><br>";
 if($nPrecio<500000){
 echo"Compra un caroo más pequeño";
 }else if($nPrecio==500000){
 echo"Compra un $sMarca";
 }else if($nPrecio>500000){
 echo"Compra un $sTipo $sMarca";}
 ?>
 <br><br><br>
 <?php
 $msg=''; $nPrecio=50000;
 echo"<div style=background-color:blue><h2>Resultado Con Operador
Ternario</div></h2><br>";
 $nPrecio>=500000 ? $msg='Compra un BMW': $msg='Compra un carro
más pequeño ';
 echo $msg;
 ?>