<?php
/**
 * PAS 3 - Una sola pàgina per recollir i mostrar les dades
 * Mira com es fa la peticio i aixi fara una cosa o l'altra depenent de si hi ha dades o no
 * La primera visita es amb GET i quan es prem el boto de enviar es fa amb POST
 */
$nom = '';
$correu = '';
$dia = '';
$repeteix_correu = '';
$telefon = '';
$direccio = '';

// var de control
$enviat = false;
// array predefinit $_SERVER ens dona info del servidor
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// si el reequest_method es POST, vol dir que s'ha premut el boto d'enviar i per tant hi ha dades a $_POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $repeteix_correu = trim($_POST['repeteix_correu'] ?? '');
    $dia = trim($_POST['dia'] ?? 'sense triar');
    $telefon = trim($_POST['telefon'] ?? '');
    $direccio = trim($_POST['direccio'] ?? '');
    $enviat = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripció</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h1>Inscripció</h1>

    <?php if ($enviat): ?>
        <p>Incripció rebuda: <?= htmlspecialchars($nom) ?> - <?= htmlspecialchars($correu) ?> - 
        <?= htmlspecialchars($dia) ?> - <?= htmlspecialchars($telefon) ?> - <?= htmlspecialchars($direccio) ?></p>
    <?php endif; ?>

    <?php if(strcmp($correu, $repeteix_correu) !== 0): ?>
        <p style="color:red">El correu i la repetició no coincideixen</p>
        <?= $enviat = false; ?>
    <?php else: ?>
        <?= $enviat = true; ?>
    <?php endif; ?>

    <form method="POST">
        <label for="nom">Nom:</label>
        <input id="nom" name="nom" type="text" value="<?= htmlspecialchars($nom) ?>">

        <label for="correu">Correu:</label>
        <input id="correu" name="correu" type="email" value="<?= htmlspecialchars($correu) ?>">

        <label for="repeteix_correu">Repeteix el correu:</label>
        <input id="repeteix_correu" name="repeteix_correu" type="email" value="<?= htmlspecialchars($repeteix_correu) ?>">

        <label for="dia">Dia:</label>
        <select id="dia" name="dia">
            <option value="divendres">Divendres</option>
            <option value="dissabte">Dissabte</option>
        </select>

        <label for="telefon">Número de telèfon:</label>
        <input id="telefon" name="telefon" type="tel" value="<?= htmlspecialchars($telefon) ?>">

        <label for="direccio">Direcció:</label>
        <input id="direccio" name="direccio" type="text" value="<?= htmlspecialchars($direccio) ?>">

        <button>Incriure'm</button>
    </form>
</body>
</html>