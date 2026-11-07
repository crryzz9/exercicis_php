<?php
declare(strict_types=1); // primera linia del fitxer

/**
 * Summary of saluda
 * @param string $nom
 * @return void
 */
function saluda(string $nom): void
{
    echo "<p>Benvingut a Ampeterby7, $nom</p>";
}

/**
 * Summary of targeta
 * @param string $nom
 * @param float $preu
 * @param int $estoc
 * @return void
 */
function targeta(string $nom, float $preu, int $estoc): void
{
    $preuFormatat = number_format($preu, 2, ',', '.');
    echo '<div class="targeta">';
    echo "<h3>$nom</h3>";
    echo "<p>$preuFormatat EUR - Estoc: $estoc</p>";
    echo '</div>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 2</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <?php saluda('Alejandra'); ?>
    <?php saluda('Quim'); ?>
    <?php saluda('Ignacio'); ?>
    
    <h2>Exercici 2</h2>
    <div class="graella">
        <?php
        targeta('Teclat mecanic RGB', 79.90, 4);
        targeta('Ratoli vertical', 29.95, 7);
        targeta('Monitor 27" QHD', 1289.00, 2);
        ?>
    </div>

    <h2>Exercici 3</h2>
    <!-- 
    
    Si poso el preu on va el nom, PHP dona aquest error i la pàgina s'atura:
    Fatal error: Uncaught TypeError: targeta(): Argument #1 ($nom) must be of type string,
    float given
    
    Per què: els paràmetres van per ordre. El primer valor (79.90) entra a $nom, que
    espera un string, i el segon entra a $preu, que espera un float
    Amb strict_types=1 PHP no converteix res i llança un TypeError.
    -->
    <!--
    <div class="graella">
        <php targeta(22.89, 'Hola', 5);?>
    </div>
    -->
    <div class="graella">
        <?php targeta('Hola', 22.89, 5); ?>
    </div> 
</body>
</html>