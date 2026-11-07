<?php
declare(strict_types=1); // primera linia del fitxer
$botiga = 'Ampeterby7'; 
/**
 * Summary of mostra
 * @return string
 */
function mostra():string {
    return '$Botiga:' . $botiga;
}

/**
 * Summary of correcte
 * @return string
 */
function correcte():string {
    global $botiga; // accedim a la variable global $botiga
    return '$Botiga:' . $botiga;
}
/**
 * Summary of comptaLocal
 * @return int
 */
function comptaLocal():int {
    $n = 0;
    $n++;
    return $n; // sempre retorna 1, ja que la variable $n es crea i s'inicialitza a 0 cada vegada que s'executa la funció
}
/**
 * Summary of comptaStatic
 * @return int
 */
function comptaStatic():int {
    static $n = 0; // la variable $n es crea només una vegada i conserva el seu valor entre crides a la funció
    $n++;
    return $n;
}



?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 6 </title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h2>Exercici 1</h2>
    <!-- Undefined variable $botiga -->
    <p>Versió dolenta: <?php echo mostra(); ?></p>
    <p>Versió bona: <?php echo correcte(); ?></p>

    <h2>Exercici 2</h2>
    <p>comptaLocal(): <?php echo comptaLocal() . ', ' . comptaLocal() . ', ' . comptaLocal(); ?></p>
    <p>comptaStatic(): <?php echo comptaStatic() . ', ' . comptaStatic() . ', ' . comptaStatic(); ?></p>

    <!-- 
    Diferència:
    comptaLocal() dona 1, 1, 1 perquè $n es crea de nou a 0 a cada crida i mor quan
    la funció acaba
    comptaStatic() dona 1, 2, 3 perquè una variable static només s'inicialitza la
    primera vegada i recorda el seu valor entre crides.
    -->
</body>
</html>