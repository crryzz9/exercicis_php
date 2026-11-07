<?php
declare(strict_types=1); // primera linia del fitxer

$productes = [
    ['nom' => 'Producte 1', 'categoria' => 'Categoria A', 'preu' => 10.99, 'estoc' => 5],
    ['nom' => 'Producte 2', 'categoria' => 'Categoria B', 'preu' => 15.49, 'estoc' => 10],
    ['nom' => 'Producte 3', 'categoria' => 'Categoria A', 'preu' => 7.99, 'estoc' => 0],
    ['nom' => 'Producte 4', 'categoria' => 'Categoria C', 'preu' => 12.00, 'estoc' => 8],
    ['nom' => 'Producte 5', 'categoria' => 'Categoria B', 'preu' => 9.50, 'estoc' => 0],
    ['nom' => 'Producte 6', 'categoria' => 'Categoria A', 'preu' => 20.00, 'estoc' => 3],
];

/**
 * Summary of preuAmbIva
 * @param float $base
 * @param float $iva
 * @return float
 */
function preuAmbIva(float $base, float $iva = 0.21): float {
    return round($base * (1 + $iva), 2);
}

/**
 * Summary of preuAmbIva2
 * @param array $productes
 * @param float $iva
 * @return float|int
 */
function preuAmbIva2(array $productes, float $iva = 0.21): float {
    $preuIva = 0;
    foreach ($productes as $producte) {
        $preuIva += $producte['preu'] * (1 + $iva); // Suma el preu amb IVA de cada producte
    }
    return $preuIva;
}

/**
 * Summary of formatPreu
 * @param float $preu
 * @return string
 */
function formatPreu(float $preu): string {
    return number_format($preu, 2, ',', '.') . ' EUR';
}
/**
 * Summary of estatEstoc
 * @param int $estoc
 * @return string
 */
function estatEstoc(int $estoc): string {
    if ($estoc === 0) {
        return 'Esgotat';
    }
    if ($estoc <= 3) {
        return 'Últimes unitats';
    }
    return 'Disponible';
}

/**
 * Summary of estatEstoc2
 * @param array $productes
 * @return string
 */
function estatEstoc2(array $productes): string {
    $estat = '';
    foreach ($productes as $producte) {
        if ($producte['estoc'] === 0) {
            $estat .= $producte['nom'] . ': Esgotat<br>';
        } elseif ($producte['estoc'] < 5) {
            $estat .= $producte['nom'] . ': Poc estoc<br>';
        } else {
            $estat .= $producte['nom'] . ': Disponible<br>';
        }
    }
    return $estat;
}
/**
 * Summary of filtraCategoria
 * @param array $productes
 * @param string $categoria
 * @return array
 */
function filtraCategoria(array $productes, string $categoria): array {
    $filtrats = [];
    foreach ($productes as $producte) {
        if ($producte['categoria'] === $categoria) {
            $filtrats[] = $producte;
        }
    }
    return $filtrats;
}
/**
 * Summary of resumCataleg
 * @param array $productes
 * @return array{Disponibles: int, Esgotats: int, "Total de productes": int, "Valor de l'estoc": string}
 */
function resumCataleg(array $productes): array {
    $esgotats = 0;
    $valor = 0.0;
    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $esgotats++;
        }
        $valor += $item['preu'] * $item['estoc'];
    }
    return [
        'Total de productes' => count($productes),
        'Disponibles'        => count($productes) - $esgotats,
        'Esgotats'           => $esgotats,
        "Valor de l'estoc"   => formatPreu($valor),
    ];
}
/**
 * Summary of pintaTargeta
 * @param array $producte
 * @return void
 */
function pintaTargeta(array $producte): void {
    echo '<div class="targeta">';
    echo '<h3>' . htmlspecialchars($producte['nom']) . '</h3>';
    echo '<p>Categoria: ' . htmlspecialchars($producte['categoria']) . '</p>';
    echo '<p>Preu: ' . formatPreu(preuAmbIva($producte['preu'])) . ' (IVA inclòs)</p>';
    echo '<p class="estat">' . estatEstoc($producte['estoc']) . '</p>';
    echo '</div>';
}
    
/**
 * Summary of pintaGraella
 * @param array $productes
 * @return void
 */
function pintaGraella(array $productes): void {
    if (count($productes) === 0) {
        echo '<p class="avis">No hi ha cap producte en aquesta categoria.</p>';
        return;
    }
    echo '<div class="graella">';
    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Repte final</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header>
        <h1>Ampeterby7</h1>
        <p>El catàleg de la botiga</p>
    </header>

    <h2>Resum del catàleg</h2>
    <ul>
        <?php foreach (resumCataleg($productes) as $clau => $valor): ?>
            <li><strong><?php echo $clau; ?>:</strong> <?php echo $valor; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Tots els productes</h2>
    <?php pintaGraella($productes); ?>

    <h2>Categoria: Categoria A</h2>
    <?php pintaGraella(filtraCategoria($productes, 'Categoria A')); ?>


    <h2>Categoria: ornitorrinco</h2>
    <?php pintaGraella(filtraCategoria($productes, 'ornitorrinco')); ?>

    <h2>Extres</h2>
    <p>Suma de preus amb IVA (preuAmbIva2): <?php echo formatPreu(preuAmbIva2($productes)); ?></p>
    <p>Estat de l'estoc (estatEstoc2):</p>
    <p><?php echo estatEstoc2($productes); ?></p>

    <footer>Ampeterby7 - <?php echo date('Y'); ?></footer>
</body>
</html>