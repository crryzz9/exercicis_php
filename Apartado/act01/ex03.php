<?php
// CONSTANTS
const JOC = 'Regne dels Ampeterby7';
const VIDA_MAXIMA = 100;
const XP_PER_NIVELL = 1000;
const FORÇA_MAXIMA = 50;
const FERIT = 30; // per sota d'aquest % de vida està ferit
// VARIABLES
$nom = 'Enric Marquès';
$classe = 'Payaso';
$nivell = 7;
$vida = 12;
$força = 25;
$experiencia = 4250;
$atac = 12;
// CALCULS
$percentatgeVida = round($vida / VIDA_MAXIMA * 100, 1);
$percentatgeForca = round($força / FORÇA_MAXIMA * 100, 1);

// experiencia que necessita per pujar de nivell i la que li falta
$xpMax = $nivell * XP_PER_NIVELL;
$xpQueFalta = $xpMax - $experiencia;

// el poder d'atac puja 2 punts per cada nivell
$poderAtac = $atac + $nivell * 2;

// ESTAT: la comparacio dona true o false, i multiplicat per 1 dona 1 o 0
// aquest 1 o 0 es l'opacitat de l'etiqueta "Ferit": 1 es veu, 0 no es veu
$ferit = ($percentatgeVida < FERIT) * 1;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitxa de <?= $nom; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?= JOC; ?></h1>
        <p>Fitxa de personatge</p>
    </header>

    <main>
        <article class="fitxa">
            <h2><?= $nom; ?></h2>

            <?php echo "<p class='classe'>$classe - Nivell $nivell</p>"; ?>

            <p>Vida: <?= $vida; ?> / <?= VIDA_MAXIMA; ?> (<?= $percentatgeVida; ?> %)</p>
            <div class="barra"><span class="vida" style="width: <?= $percentatgeVida; ?>%"></span></div>

            <p>Força: <?= $força; ?> / <?= FORÇA_MAXIMA; ?> (<?= $percentatgeForca; ?> %)</p>
            <div class="barra"><span class="fuerza" style="width: <?= $percentatgeForca; ?>%"></span></div>

            <p>Poder d'atac: <?= $poderAtac; ?></p>
            // L'experiència que té i la que necessita per pujar de nivell, amb un missatge que li diu quants punts li falten per pujar de nivell.
            <p>Experiència: <?= $experiencia; ?> / <?= $xpMax; ?></p>

            <?php echo '<p>Li falten ' . $xpQueFalta . ' punts per pujar de nivell</p>'; ?>

            <!-- l'etiqueta Ferit nomes es veu si l'opacitat es 1, això si que m'he ajudat amb la IA -->
            <p class="ferit" style="opacity: <?= $ferit; ?>">Ferit</p>
        </article>
    </main>
</body>
</html>