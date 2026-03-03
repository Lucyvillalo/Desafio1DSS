<?php
$usuario = $_POST["inputUsuario"];
$nombre = $_POST["inputNombre"];
$apellido = $_POST["inputApellido"];
$edad = intval($_POST["inputEdad"]);
$sexo = $_POST["inputSexo"];

$contra_aleatoria = base64_encode(openssl_random_pseudo_bytes(8));

if ($edad < 18) {
    if ($sexo == "M") {
        $prefijo = "El niño";
    } else {
        $prefijo = "La niña";
    }
} else {
    $prefijo = "Adulto";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuario Creado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h2>Usuario Creado</h2>

    <p><?php echo "$prefijo $nombre $apellido"; ?></p>
    <p>Usuario: <?php echo $usuario; ?></p>
    <p>Contraseña generada: <?php echo $contra_aleatoria; ?></p>

    <a href="crearusuario.php">Regresar</a>
</div>
</body>
</html>