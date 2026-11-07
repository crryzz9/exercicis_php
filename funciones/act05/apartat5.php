<?php

declare(strict_types=1); // primera linia del fitxer
/**
 * Summary of area
 * @param float $base
 * @param float $altura
 * @return float
 */
function area(float $base, float $altura): float
{
    return $base * $altura;
}
/**
 * Summary of esgotat
 * @param int $unitats
 * @return bool
 */
function esgotat(int $unitats): bool
{
    return $unitats === 0;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 5</title>
</head>
<body>
    <h2>Exercici 1</h2>
    <p>Area amb decimals: <?php echo area(5.5, 3.2); ?></p>
    <p>Area amb enters: <?php echo area(5, 3); ?></p>

    <!-- Abans tenia això: echo area(5, '3'); -->

    <!-- Fatal error: Uncaught TypeError: area(): Argument #2 ($altura) must be of type float, string given -->
    <!-- Dona aquest error perque en mode strict_types=1, PHP no converteix automàticament els tipus de dades-->

    <h2>Arreglat</h2>
    <p>Area amb strict types: <?php echo area(5, (float)'3'); ?></p>

    <!--
    Perque es millor que PHP avisi: Si PHP converteix pel seu compte, un error passa desapercebut
    i dona resultats incorrectes sense que t'he enteris. Amb strict_types=1, PHP avisa amb un TypeError 
    i pots arreglar el problema abans que es propaguin els errors
    -->
</body>
</html>