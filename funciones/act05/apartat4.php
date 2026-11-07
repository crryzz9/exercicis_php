<?php
/**
 * Summary of preuAmbIva
 * @param float $base
 * @param float $iva
 * @return float
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}
/**
 * Summary of aplicarDescompte
 * @param float $preu
 * @param float $descompte
 * @return float
 */
function aplicarDescompte(float $preu, float $descompte = 10): float
{
    return round($preu - ($preu * $descompte / 100), 2);
}

/**
 * Summary of benvinguda
 * @param string $nom
 * @param string $salutacio
 * @return string
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string
{
    return "$salutacio, $nom!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 4</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h2>Exerici 1</h2>
    <p>Preu amb IVA 21%: <?php echo preuAmbIva(100); ?> EUR</p>
    <p>Preu amb IVA 10%: <?php echo preuAmbIva(100, 0.10); ?> EUR</p>
    <p>Preu amb IVA 4%: <?php echo preuAmbIva(100, 0.04); ?> EUR</p>

    <h2>Exercici 2</h2>
    <p>Preu amb descompte 10%: <?php echo aplicarDescompte(100); ?> EUR</p>
    <p>Preu amb descompte 25%: <?php echo aplicarDescompte(100, 25); ?> EUR</p>
    
    <h2>Exerici 3</h2>
    <p><?php echo benvinguda('VicensHD'); ?></p>
    <p><?php echo benvinguda('TheGrefg', 'Bon dia'); ?></p>
</body>
</html>