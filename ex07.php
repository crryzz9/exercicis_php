<?php
    
$zona = 'peninsula';
$saldo = 1000;
$objectiu = 2000;
$anys = 20;
$nota = 7.5;
$estoc = 2;


if ($nota >= 9) {
    $qualif = 'Excel·lent';
} elseif ($nota >= 7) {
    $qualif = 'Notable';
} elseif ($nota >= 5) {
    $qualif = 'Aprovat';
} else {
    $qualif = 'Suspès';
}

/*
    Funciones:
        - count($a) --> devuelve el número de elementos del array $a
        - in_array($x, $a, true) --> si un valor esta en el array $a devuelve true, sino false. El tercer parámetro indica si la comparación es estricta (tipo y valor)
        - array_key_exists('k', $a) --> si una clave esta en el array $a devuelve true, sino false
        - sort / rsort / ksort --> ordena por valor o por clave
        - array_sum / max / min --> suma, máximo y mínimo de un array
        - array_column($a, 'preu') --> devuelve una columna de un array
        - implode(',', $a) / explode --> convierte un array en text y texto a array
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Incorrecto -->
    <?php if ($estoc > 0) { ?>
        <p>En estoc</p>
    <?php } else { ?>
        <p>Esgotat</p>
    <?php } ?>

    <!-- Correcto -->
    <?php if ($estoc > 0): ?>
        <p>En estoc</p>
    <?php else: ?>
        <p>Esgotat</p>
    <?php endif; ?>

    <!-- 
        if (....) .... endif;
        for (...) ... endfor;
    -->

    
    <?php
        // classico
        switch ($zona) {
            case 'local':
                $environment = 0;
                break;
            case 'peninsula':
                $environment = 4.95;
                break;
            default:
                $environment = 9.95;
        }

        // php 8
        $environment = match ($zona) {
            'local'     => 0,
            'peninsula' => 4.95,
            default     => 9.95,
        };
    ?>

    <!-- bucles-->
    <?php 
        // for
        for ($i = 0; $i < 10; $i++) {
            echo $i;
        }

        // while
        while ($saldo < $objectiu) {
            $saldo *= 1.03;
            $anys++;
        }

        // do while
        do {
            $n = rand(1, 6);
        } while ($n !== 6);
    ?>
    <!-- tabla de multiplicar del 7 -->
    <table>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td>7 x <?= $i ?> = </td>
                <td><?= 7 * $i ?></td>
            </tr>
        <?php endfor; ?>
    </table>

    <?php
    // array
    $colors = ['vermell', 'verd', 'blau'];

    echo $colors[0]; // vermell
    echo '<br>';
    echo count($colors); // 3
    echo '<br>';

    $colors[] = 'groc'; // afegim un color al final

    print_r($colors); // mostra l'array complet


    // array associatiu
    $producte = [
        'nom'   => 'Teclat',
        'preu'  => 79.90,
        'estoc' => 4,
    ];

    echo $producte['nom']; // Teclat
    echo '<br>';
    $producte['preu'] = 69.90; // canviem el preu

    //foreach
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }

    foreach ($producte as $clau => $valor) {
        echo "<dt>$clau</dt>";
        echo "<dd>$valor</dd>";
    }

    $productes = [ 
        ['nom' => 'Teclat', 'preu' => 79.9],
        ['nom' => 'Ratolí', 'preu' => 24.5],
        ['nom' => 'Pantalla', 'preu' => 189],
    ];

        
    ?>
    <?php foreach ($productes as $p): ?>
        <tr>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['preu'] ?></td>
        </tr>
    <?php endforeach; ?>
    

</body>
</html>