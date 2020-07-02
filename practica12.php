<!DOCTYPE html>
<html>
	<head>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body style="background-color: #6E6E6E">
	<body>
		<div class="form">
			<form action="guardar.php" method="POST">
				<p>Matricula</p>
				<label for="matricula">Su matricula</label>
				<br>
				<input type="number" name="matricula" placeholder="Matricula" required>
				<p>Nombre</p>
				<label for="nombre">Tu nombre</label>
				<br>
				<input type="text" name="nombre" placeholder="Nombres" required>
				<p>Materia</p>
				<label for="materia">Su materia</label>
				<br>
				<input type="text" name="materia" placeholder="Materia a cursar" required>
				<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</body>
</html>
