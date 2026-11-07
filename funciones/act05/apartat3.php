<?php
declare(strict_types=1);

/**
 * Summary of preuAmbIvaEcho
 * @param float $base
 * @return void
 */
function preuAmbIvaEcho(float $base): void
{
    echo $base * 1.21;
}

/**
 * Summary of preuAmbIva
 * @param float $base
 * @return float
 */
function preuAmbIva(float $base): float
{
    return $base * 1.21;
}

/**
 * Summary of formatPreu
 * @param float $preu
 * @return string
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

$preus = [79.90, 29.95, 289.00];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 3 · return no és echo</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h2>Exercici 1</h2>
    <p>Amb echo: <?php preuAmbIvaEcho(100); ?></p>
    <p>Amb return: <?php echo preuAmbIva(100); ?></p>
    <p>Formatat: <?php echo formatPreu(preuAmbIva(100)); ?></p>

    <h2>Exercici 2</h2>
    <?php
    $total = 0.0;
    foreach ($preus as $preu) {
        $total += preuAmbIva($preu);
    }
    ?>
    <p>Total amb IVA: <?php echo formatPreu($total); ?></p>
    <p>Preu més car: <?php echo formatPreu(preuAmbIva(max($preus))); ?></p>

    <!-- 
    echo formatPreu(preuAmbIvaEcho(max($preus)));
    
    No es pot fer: preuAmbIvaEcho() és void, escriu el número a la pantalla i no torna
    res (torna null). formatPreu() espera un float i rep null, així que PHP dona un
    TypeError. A més, el número ja s'ha escrit sense format i no el podem recuperar.
    Amb return, en canvi, el valor és nostre i el podem sumar, formatar o comparar.
    -->
</body>
</html>