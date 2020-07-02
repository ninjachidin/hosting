<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="initial-scale=1, maximum-scale=1, userscalable=no, width=device-width">
 <title>Buscar Registro</title>
 </head>
 <body style="background-color: #6E6E6E">
 <center>
 <h1>Buscar Registro Espeficico</h1>
 <form action="" method="post">
 Ingrese Matricula: <input type="number" required name="matricula"
placeholder="matricula a buscar" value="" /><br>
 <br/>
 <input type="submit" value="Buscar"/>
 </form>
 </center>
 </body>
</html>
<?php
 if(isset($_POST['matricula'])){
 include("buscar.php");
 }
?>