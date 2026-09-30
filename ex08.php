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

$marcas = ['BMW', 'Audi', 'Mercedes', 'Honda'];

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

// array_key_exists — Verifica si una clave existe en un array
$columna = 'edad';

if (array_key_exists($columna, $alumnos[0])) {
  echo "<p>La columna $columna existe en el array 'alumnos'</p>";
}

// sort — Ordena un array en orden creciente
sort($marcas);
foreach ($marcas as $marca) {
    echo $marca . "<br>";
}

echo "<br>";

// rsort — Ordena un array en orden decreciente
rsort($marcas);
foreach ($marcas as $marca) {
  echo $marca . " ";
}

echo "<br>";

// ksort — Ordena un array según las claves en orden ascendente
$alumno = $alumnos[1];
ksort($alumno);
foreach ($alumno as $key => $val) {
  echo "$key --- $val, ";
}

echo "<br>";

// array_sum — Calcula la suma de los valores del array
$nums = [4, 3, 1, 8, 2];
echo 'Suma -> ' . array_sum($nums);

echo "<br>";

// max — El valor más grande
echo 'Máximo -> ' . max($nums);

echo "<br>";

// min — El valor más pequeño
echo 'Mínimo -> ' . min($nums);

echo '<br>';

// array_column — Devuelve los valores de una columna de un array de entrada
$nombres = array_column($alumnos, 'nombre');
print_r($nombres);

echo "<br>";

// implode — Une elementos de un array en un string
echo implode(", ", $marcas);

echo "<br>";

// explode — Divide un string en varios strings
$cadena = "Hola,que tal,estas,Alejandra";
$cadena_separada = explode(",", $cadena);
foreach ($cadena_separada as $c) {
  echo $c . "<br>";
}

echo "<br>";


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
