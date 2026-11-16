<?php
// Si una pàgina s'oblida del títol, no volem un avís a la pantalla.
if (!isset($titolPagina)) {
    $titolPagina = 'Inici';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titolPagina) ?> · <?= BOTIGA_NOM ?></title>
    <link rel="stylesheet" href="<?= FULL_ESTILS ?>">
</head>
<body>
<header>
    <h1><?= BOTIGA_NOM ?></h1>
    <p class="lema"><?= BOTIGA_LEMA ?></p>
    <img class="ampeter" src="<?= BOTIGA_LOGO ?>" alt="Logo de <?= BOTIGA_NOM ?>">
</header>
<main></main>