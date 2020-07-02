 <html>
<head><title>Ejemplo de formulario sencillo (Recibir)</title></head>
 <body>
 <form name="formulario" method="get" action="EjemploGET7.1.php">
 </form>
 <h3>Recibe</h3>
 <?php
 $nombre = $_GET['nombre'];
 echo"Nombre: $nombre";
 ?>
 </body>
</html>