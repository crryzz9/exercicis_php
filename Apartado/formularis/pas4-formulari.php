<?php

/**
 * PAS 4- Validar, controlar i escapar errors
 */

// declaracio de variables
$nom = '';
$correu = '';
$dia = '';
$errors = [];
$inscrit = false;

// si recibimos los datos
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia = trim($_POST['dia'] ?? '');
}

if($nom === '') {
    $errors['nom'] = 'El nom és obligatori';
}

if ($correu === '') {
    $errors['correu'] = 'El correu és obligatori';
} elseif (filter_var($correu, FILTER_VALIDATE_EMAIL) === false) {
    $errors['correu'] = 'El correu no és vàlid';
}

if ($dia !== 'divendres' && $dia !== 'dissabte') {
    $errors['dia'] = 'El dia no és vàlid';
}

// si el count del array $errors es 0, vol dir que no hi ha errors i per tant podem inscriure
if (count($errors) === 0) {
    $inscrit = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripció al festival</title>
</head>
<body>
    <h1>Inscripció al festival</h1>
    <?php if ($inscrit):?>
        <p class="ok">Inscripcio feta, <?= htmlspecialchars($nom) ?> </p>
        <p class="ok">T'esperem el <?= htmlspecialchars($dia) ?>, al festival!</p>
    <?php else: ?>
        <!-- novalidate en el formulari per a que no es validi amb HTML5 i es faci amb PHP -->
        <form method="POST" novalidate>
            <label for="name">Nom</label>
            <input id="nom" name="nom" type="text" value="<?= htmlspecialchars($nom) ?>">
            <?php if (isset($errors['nom'])): ?>
                <p class="error"><?= htmlspecialchars($errors['nom']) ?></p>
            <?php endif; ?>
        

            <label for="correu">Correu</label>
                <input id="correu" name="correu" type="email" value="<?= htmlspecialchars($correu) ?>">
                <?php if (isset($errors['correu'])): ?>
                    <p class="error"><?= htmlspecialchars($errors['correu']) ?></p>
                <?php endif; ?>

            <label for="dia">Dia</label>
            <select id="dia" name="dia">
                <option value="">Tria un dia</option>
                <option value="divendres" <?= $dia === 'divendres' ? 'selected' : '' ?>>Divendres</option>
                <option value="dissabte" <?= $dia === 'dissabte' ? 'selected' : '' ?>>Dissabte</option>
            </select>
            <?php if (isset($errors['dia'])): ?>
                <p class="error"><?= htmlspecialchars($errors['dia']) ?></p>
            <?php endif; ?>

            <button>Inscriure'm</button>
        </form> 
    <?php endif; ?>

</body>
</html>