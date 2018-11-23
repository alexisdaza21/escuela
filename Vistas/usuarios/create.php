<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<?php require("Vistas/home/header.php");?>
</head>

<body>
	<br><br>
	<br>	<section id="cta" class="wrapper">
				<div class="inner" >
	<form method="POST">
		<label>Nombres:</label><br>
		<input type="text" name="Usuarios[nombres]" required><br><br>
		<label>Apellidos:</label><br>
		<input type="text" name="Usuarios[apellidos]" required><br><br>
		<label>Tipo:</label><br>
			<select name="Usuarios[perfil]" required>
				<option value="">Seleccione</option>
				<option value="Administrador">Administrador</option>
				<option value="Vendedor">Vendedor</option>
		</select><br><br>
		<label>Documento:</label><br>
		<input type="number" name="Usuarios[documento]"><br><br>
		<label>Contrase&ntilde;a</label><br>
		<input type="password" name="Usuarios[contrasena]"><br><br>
		<button type="submit">Agregar</button>
	</form>
					</div>
</section>
	<?php  require("Vistas/home/footer.php");?>
</body>
</html>