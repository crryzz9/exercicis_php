<?php
const IVA = 0.21; 

$producte = 'Teclat';
$base = 79.90;
$estoc = 4;
// funcion para redondear a dos decimales
$total = round($base * (1 + IVA), 2);
$nom = 'Victor';
$cognom = 'Reig';
$direccio = 'Carrer Lacy, 34';

?>

<h2><?php echo $producte; ?></h2>

<p>Preu amb IVA: <?= $total; ?> EUR</p>

<p>Disponibilitat: <?= $estoc; ?> unitats</p>

<h2>Informació personal:</h2>
<p>Nom complet: <?= $nom . ' ' . $cognom; ?></p>
<p>Direcció: <?= $direccio; ?></p>