<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">
    <h2>Crear Usuario</h2>

    <form method="POST" action="crearusuariopost.php">
        <label>Usuario:</label>
        <input type="text" name="inputUsuario" required>

        <label>Nombres:</label>
        <input type="text" name="inputNombre" required>

        <label>Apellidos:</label>
        <input type="text" name="inputApellido" required>

        <label>Edad:</label>
        <input type="number" name="inputEdad" required>

        <label>Sexo:</label>
        <input type="radio" value="M" name="inputSexo" required> Masculino
        <input type="radio" value="F" name="inputSexo" required> Femenino

        <button type="submit">Crear</button>
    </form>
</div>

</body>
</html>