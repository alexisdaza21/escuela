<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
    <?php require("Vistas/home/header.php");?>
</head>

<body>
    <br><br>
    <br>    <section id="cta" class="wrapper">
                <div class="inner" >
	<h3 align="center">Actualizar <?= $usuario->nombres ?></h3>
	<form method="POST">
		<label>Nombres:</label>
		<input type="text" name="Usuarios[nombres]" value="<?= $usuario->nombres ?>" required>
		<label>Apellidos:</label>
		<input type="text" name="Usuarios[apellidos]" value="<?= $usuario->apellidos?>" required>
		<label>Tipo:</label>
			<select name="Usuarios[perfil]" required>
				<option value="<?= $usuario->perfil ?>"><?= $usuario->perfil ?></option>
				<option value="Administrador">Administrador</option>
				<option value="Vendedor">Vendedor</option>
		</select>
		<label>Documento:</label>
		<input type="text" name="Usuarios[documento]" value="<?= $usuario->documento?>" required>
		<label>Contrase&ntilde;a</label>
		<input type="password" name="Usuarios[contrasena]" value="<?= $usuario->contrasena ?>" required><br><br>
		<button type="submit">Crear Usuario</button>&nbsp;
        <a href="index.php?c=usuarios&a=admin">Volver</a>
     </form>
</body>
</html>