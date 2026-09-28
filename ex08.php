<?php
/*
    Crear array asociativo con:
        - nombre
        - curso
        - edad
        - nota_media

    10 alumnos

    Mostrar en una tabla HTML
*/

$alumnos = [
    ['nombre' => 'Enric', 'curso' => 'DAW2', 'edad' => 42, 'nota_media' => 2],
    ['nombre' => 'Oscar', 'curso' => 'DAW1', 'edad' => 19, 'nota_media' => 9],
    ['nombre' => 'Pau', 'curso' => 'DAW2', 'edad' => 19, 'nota_media' => 7],
    ['nombre' => 'Borja', 'curso' => 'DAW1', 'edad' => 50, 'nota_media' => 6],
    ['nombre' => 'Blas', 'curso' => 'DAW2', 'edad' => 22, 'nota_media' => 5],
    ['nombre' => 'Genis', 'curso' => 'DAW1', 'edad' => 19, 'nota_media' => 10],
    ['nombre' => 'Manel', 'curso' => 'DAW2', 'edad' => 20, 'nota_media' => 4],
    ['nombre' => 'Marc', 'curso' => 'DAW1', 'edad' => 19, 'nota_media' => 8],
    ['nombre' => 'Ampeterby7', 'curso' => 'DAW2', 'edad' => 32, 'nota_media' => 7],
    ['nombre' => 'Xavi', 'curso' => 'DAW1', 'edad' => 54, 'nota_media' => 9]
];

// count — Cuenta todos los elementos de un array o en un objeto Countable
echo "Numero de alumnos: " . count($alumnos);
echo "<br>";
// in_array(mixed $needle, array $haystack, bool $strict = false): bool
foreach($alumnos as $alumno) {
    if(in_array('Enric', $alumno)) {
        echo $alumno['nombre']. " si que existe";
        echo "<br>";
    }
}
// array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX08</title>
        
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Edad</th>
            <th>Nota</th>
        </tr>
        <?php foreach($alumnos as $alumno): ?>
            <tr>
                <td><?= $alumno['nombre'] ?></td>
                <td><?= $alumno['curso'] ?></td>
                <td><?= $alumno['edad'] ?></td>
                <td><?= $alumno['nota_media'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
        
</body>
</html>
