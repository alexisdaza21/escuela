<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <br><br>
    <br>   
	<h3 align="center">Actualizar <?= $equipos->equipo ?></h3>
	<form method="POST">
		<label>Nombres equipo:</label>
		<input type="text" name="Equipos[equipo]" value="<?= $equipos->equipo ?>" required>

			<select name="Equipos[categoria]" required>
				<option value="<?= $equipos->categoria ?>"><?= $equipos->categoria ?></option>
				<option value="Infantil">Infantil</option>
				<option value="Juvenil">Juvenil</option>
		</select>

		<button type="submit">editar Equipo</button>&nbsp;
        <a href="index.php?c=equipos&a=admin">Volver</a>
     </form>
</body>
</html>