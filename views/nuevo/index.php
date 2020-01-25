<!DOCTYPE html>
<html>
<head>
	<title>Main View</title>
</head>
<body>
	
	<?php require 'views/header.php'; ?>
	<div id="main">
		<h1 class="center">Nuevo recurso</h1>

		<form action="<?php echo constant('URL'); ?>nuevo/registrarNuevoAlumno" method="POST">
			<p>
				<label for="matricula">Matricula</label><br>
				<input type="text" name="matricula" required>
			</p>
			<p>
				<label for="nombre">Nombre</label><br>
				<input type="text" name="nombre" required>
			</p>
			<p>
				<label for="apellido">Apellido</label><br>
				<input type="text" name="apellido" required>
			</p><br>
			<p>
				<input type="submit" value="Registrar nuevo alumno">
			</p>
		</form>
	</div>

		


<?php require 'views/footer.php'; ?>
</body>
</html>