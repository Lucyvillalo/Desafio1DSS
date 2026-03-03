<?php
spl_autoload_register(function($class) {
    require_once __DIR__ . "/class/" . $class . ".class.php";
});

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$nota1Array = $_GET['nota1'];
$nota2Array = $_GET['nota2'];
$nota3Array = $_GET['nota3'];

$promedioObj = new Promedio();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">
<h2>Tabla de Promedios</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Nota 1</th>
    <th>Nota 2</th>
    <th>Nota 3</th>
    <th>Promedio</th>
</tr>

<?php
try {

for ($i = 0; $i < count($id); $i++) {

    $n1 = floatval($nota1Array[$i]);
    $n2 = floatval($nota2Array[$i]);
    $n3 = floatval($nota3Array[$i]);

    $prom = $promedioObj->calcular($n1, $n2, $n3);

    echo "<tr>
            <td>{$id[$i]}</td>
            <td>{$nombre[$i]}</td>
            <td>$n1</td>
            <td>$n2</td>
            <td>$n3</td>
            <td><strong>$prom</strong></td>
          </tr>";
}

} catch (Exception $e) {
    echo "<tr><td colspan='6'>" . $e->getMessage() . "</td></tr>";
}
?>

</table>

<br>
<a href="estudiantes.php">Regresar</a>

</div>

</body>
</html>