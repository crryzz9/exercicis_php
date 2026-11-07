<?php
declare(strict_types=1); // primera linia del fitxer
/**
 * Summary of capçalera
 * @return void
 */
function capçalera(): void
{
    echo '<header><h1>Hola Alejandra</h1><br><p>Soy Ampeterby7</p></header>';    
}

/**
 * Summary of peu
 * @return void
 */
function peu(): void
{
    echo '<footer>Ampeterby7 - ' . date('Y') . '</footer>';
}

/**
 * Summary of missatgeAmagat
 * @return void
 */
function missatgeAmagat(): void
{
    echo '<p>Aquest missatge està amagat</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 1</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <?php capçalera(); ?>

    <p>La capçalera s'ha cridat una vegada i el peu tres vegades seguides.</p>

    <?php
    peu();
    peu();
    peu();
    ?>

</body>
</html>