 <!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1,
userscalable=no, width=device-width">
 <title>Conversor de monedas</title>
 </head>
 <body style="background-color: #6E6E6E">
 <center>
 <form name="formulario" method="get" action="practica7.2-GETa.php">
 </form>
 <?php
 $nombre = $_GET['nombre']; 
 $direccion = $_GET['dir'];
 $tel = $_GET['tel'];
 $pesosm = $_GET['dinero'];
 $euros=$pesosm * 0.046;
 $dolar=$pesosm * 0.051;
 $libra=$pesosm * 0.040;
echo"<strong>$nombre, si cambias $pesosm pesos mexicanos el día de hoy,
recibirás</strong><br>";
echo"<strong>$euros Euros</strong><br>";
echo"<strong>$dolar Dólares</strong><br>";
echo"<strong>$libra Libras</strong><br>";
 ?>

 </center>
 </body>
</html> 