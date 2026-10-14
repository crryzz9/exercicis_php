<?php
/**
 * PAS 3 - Una sola pàgina per recollir i mostrar les dades
 * Mira com es fa la peticio i aixi fara una cosa o l'altra depenent de si hi ha dades o no
 * La primera visita es amb GET i quan es prem el boto de enviar es fa amb POST
 */
$nom = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$dia = trim($_POST['dia'] ?? 'sense triar');
// var de control
$enviat = false;
// array predefinit $_SERVER ens dona info del servidor
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>