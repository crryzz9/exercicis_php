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
 * Summary of valorEstoc
 * @param array $productes
 * @return float
 */
function valorEstoc(array $productes): float {
    $total = 0.0;
    foreach ($productes as $producte) {
        $total += $producte['preu'] * $producte['estoc'];
    }
    return round($total, 2); // Retorna el valor total de l'estoc amb dues decimals
}
/**
 * Summary of quantsEsgotats
 * @param array $productes
 * @return int
 */
function quantsEsgotats(array $productes): int {
    $esgotats = 0;
    foreach ($productes as $producte) {
        if ($producte['estoc'] === 0) {
            $esgotats++;
        }
    }

    return $esgotats; // Retorna el nombre de productes esgotats
}
/**
 * Summary of preuMitja
 * @param array $productes
 * @return float
 */
function preuMitja(array $productes): float {
    $total = 0.0;
    if (count($productes) === 0) {
        return 0.0; // Evita la divisió per zero si no hi ha productes
    }

    foreach ($productes as $producte) {
        $total += $producte['preu'];
    }

    return round($total / count($productes), 2); // Retorna el preu mitjà amb dues decimals
}
/**
 * Summary of nomesDisponibles
 * @param array $productes
 * @return array
 */
function nomesDisponibles(array $productes): array {
    $disponibles = [];
    foreach ($productes as $producte) {
        if ($producte['estoc'] > 0) {
            $disponibles[] = $producte;
        }
    }

    return $disponibles; // Retorna un array amb els productes disponibles
}
/**
 * Summary of elMesCar
 * @param array $productes
 * @return array
 */
function elMesCar(array $productes): array {
    if (count($productes) === 0) {
        return []; // Retorna un array buit si no hi ha productes
    }

    $mesCar = $productes[0];
    foreach ($productes as $producte) {
        if ($producte['preu'] > $mesCar['preu']) {
            $mesCar = $producte;
        }
    }

    return $mesCar; // Retorna el producte més car
}
/**
 * Summary of resumCataleg
 * @param array $productes
 * @return array{disponibles: int, esgotats: int, "mes_car": mixed, "preu_mitja": float, total: int, "valor_estoc": float}
 */
function resumCataleg(array $productes): array {
    return [
        'total' => count($productes),
        'valor_estoc' => valorEstoc($productes),
        'esgotats' => quantsEsgotats($productes),
        'preu_mitja' => preuMitja($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car' => elMesCar($productes)['nom'],
    ];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 7</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h2>Exercici 1 · Funcions que tornen un valor</h2>
    <p>Valor de l'estoc: <?php echo valorEstoc($productes); ?> EUR</p>
    <p>Productes esgotats: <?php echo quantsEsgotats($productes); ?></p>
    <p>Preu mitjà: <?php echo preuMitja($productes); ?> EUR</p>
    <p>Preu mitjà d'un array buit: <?php echo preuMitja([]); ?></p>

    <h2>Exercici 2 · Funcions que tornen un array</h2>
    <p>Productes disponibles:</p>
    <ul>
        <?php foreach (nomesDisponibles($productes) as $item): ?>
            <li><?php echo $item['nom']; ?> (<?php echo $item['estoc']; ?> unitats)</li>
        <?php endforeach; ?>
    </ul>

    <?php $mesCar = elMesCar($productes); ?>
    <p>El més car: <?php echo $mesCar['nom']; ?> (<?php echo $mesCar['preu']; ?> EUR)</p>

    <p>Resum del catàleg:</p>
    <ul>
        <?php foreach (resumCataleg($productes) as $clau => $valor): ?>
            <li><strong><?php echo $clau; ?>:</strong> <?php echo $valor; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>