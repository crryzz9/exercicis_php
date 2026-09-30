<?php

// funciones prestablecidas
// isset() — Determina si una variable existe y no es null
// unset() — Libera la memoria y destruye la variable

$var = "10";

if (isset($var)) {
    echo "La variable $var existe";
}
echo "<br>";

unset($var);
if (!isset($var)) {
    echo "La variable $var no existe";
}
echo "<br>";

// gettype() — Devuelve el tipo de una variable que pasamos por parametro
// settype() — Establece el tipo de dato de una variable que pasamos por parametro
// empty() — Determina si una variable está vacía
// is_integer(var) — Determina si una variable es de tipo integer
// is_string(var) — Determina si una variable es de tipo string
// is_float(var) — Determina si una variable es de tipo float
// is_bool(var) — Determina si una variable es de tipo boolean
// is_array(var) — Determina si una variable es de tipo array

// ex1: for para la tabla del 5
// var existe?
$var1 = 5;
if (isset($var1)) {
    for($i = 1; $i <= 10; $i++) {
        echo "$var1 x $i = " . ($var1 * $i) . "<br>";
        echo "<br>";
    }
}

// ex2: mostrar los numeros pares del 1 al 100
for($i = 1; $i <= 1000; $i++) {
    if($i % 2 == 0) {
        echo $i . " ";
    }
}


echo "<br>";

// operador ternario
$edad = 18;
echo ($edad >= 18) ? "Es mayor de edad" : "No es mayor de edad";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        // ex3: dibuja una tabla html donde salgan las tablas de multiplicar del 1 al 10
        echo "<br>";
        for($i = 1; $i <= 10; $i++) {
            for($j = 1; $j <= 10; $j++) {
                echo $i . "x" . $j . "=" . ($i * $j) . "<br>";
            }
        }
    -->
    <table>
        <tr>
            <?php for($i = 1; $i <= 10; $i++): ?>
                <th>Tabla del <?= $i ?></th>
            <?php endfor; ?> 
        </tr>
        <?php for($i = 1; $i <= 10; $i++): ?>
            <tr>
                <?php for($j = 1; $j <= 10; $j++): ?>
                    <td><?= "$j x $i = " . ($i * $j) ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        
        
       
    </table>
</body>
</html>