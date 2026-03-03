<?php
$alumnos = array(
    0 => array("nombre"=>"Juan Perez","nota1"=>8,"nota2"=>7,"nota3"=>9),
    1 => array("nombre"=>"Ana Diaz","nota1"=>9,"nota2"=>9,"nota3"=>8),
    2 => array("nombre"=>"Vilma Perez","nota1"=>6,"nota2"=>9,"nota3"=>9),
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estudiantes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">
<h2>Lista de Estudiantes</h2>

<form method="GET" action="estudiantesprocesar.php">
<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Nota1</th>
<th>Nota2</th>
<th>Nota3</th>
</tr>

<?php foreach ($alumnos as $groupid => $fields) { ?>
<tr>
<td><input type="text" name="id[]" value="<?php echo $groupid; ?>"></td>
<td><input type="text" name="nombre[]" value="<?php echo $fields["nombre"]; ?>"></td>
<td><input type="text" name="nota1[]" value="<?php echo $fields["nota1"]; ?>"></td>
<td><input type="text" name="nota2[]" value="<?php echo $fields["nota2"]; ?>"></td>
<td><input type="text" name="nota3[]" value="<?php echo $fields["nota3"]; ?>"></td>
</tr>
<?php } ?>

</table>

<button type="submit">Procesar</button>
</form>

</div>
</body>
</html>