<?php
$preu1 = 99.99;
const IVA = 0.21;
$preuTotal = $preu1 * (1 + IVA);

const MONEDA = '€';
const BOTIGA = 'ampeterby7';
const DESCOMPTE_SOCI= 0.10;

const PRODUCTE1 = 'Gorra de ampeter';
const DESCRIPCIO1 = 'Gorra molona del mismisimo ampeterby7';
$preuSoci = $preu1 * (1 - DESCOMPTE_SOCI);

$estoc1 = 10;
const REF1 = 'CAM-1425376';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online <?= BOTIGA; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tienda Online <?= BOTIGA; ?></h1>
        <p>Esto es una tienda online de <?= BOTIGA; ?></p>
    </header>

    <main>
        <article class="product">
            <h2><?= PRODUCTE1; ?></h2>
            <p class="descripcio"><?= DESCRIPCIO1; ?></p>
            <p class="preu">Preu sense IVA: <?= number_format($preu1, 2, ',') . MONEDA; ?></p>
            <p class="preu">Preu amb IVA (21%): <?= number_format($preuTotal, 2, ',') . MONEDA; ?></p>
            <p class="total">TOTAL: <?= number_format($preuTotal, 2, ',') . MONEDA; ?></p>
            <p class="preu">Preu soci amb descompte (10%): <?= number_format($preuSoci, 2, ',') . MONEDA; ?></p>

            <p class="estoc">Unidades disponibles: <?= $estoc1 ?></p>
            <p class="ref"><?= REF1 ?></p>
        </article>
    </main>

    <footer>
        <p>&copy; Tienda Online <?= BOTIGA; ?> S.L.</p>
    </footer>
</body>
</html>