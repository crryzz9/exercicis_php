<?php
/*
-	Amb el teu array de grups, genera una llista <ul> amb un <li> per grup, fent servir foreach i la sintaxi alternativa. 
 
-	Fes-ne una segona versió que mostri també la posició de cada grup. 

*/

$grups = array("Grup1", "Grup2", "Grup3", "Grup4", "Grup5");


/*
-	Amb l'array associatiu grup => estil, genera una taula HTML amb dues columnes. 
 
-	Afegeix una fila al final amb el total de grups. 


*/

$estils = array(
    "Grup1" => "Rock",
    "Grup2" => "Pop",
    "Grup3" => "Jazz",
    "Grup4" => "Hip Hop",
    "Grup5" => "Electrònica"
);

/*
-	Recorre el mateix array associatiu amb do-while i les funcions reset(), key(), current() i next(). 
 
-	Comprova que la sortida és idèntica a la de l'E2. 
 
-	Escriu en un comentari quina de les dues maneres et sembla més clara i per què. 

*/
do {
    $index = key($estils);
    $valor = current($estils);
    echo "Grup: $index - Estil: $valor<br>";
}while (next($estils));

// La manera amb foreach em sembla més clara perquè és més fàcil de llegir. No cal 
// preocupar-se per l'array, ja que foreach s'encarrega de recórrer tots els elements. 
// A més, la sintaxi és més neta i evita possibles errors relacionats amb
// reset(), key(), current() i next()

/*
-	Escriu la funció recorrerInvers(array $llista) que mostri els elements de l'últim al primer amb end(), key(), current() i prev(). 
 
-	Crida-la passant-li l'array de grups i estils. 
 
-	Després de cridar-la, recorre l'array original amb un foreach normal i comprova que no s'ha vist afectat. 

*/

function recorrerInvers(array $llista) {
    end($llista);
    do {
        $grup = key($llista);
        $estil = current($llista);
        echo "Grup: $grup - Estil: $estil<br>";
    } while (prev($llista));
}

    


foreach ($estils as $grup => $estil) {
    echo "Grup: $grup - Estil: $estil<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 2</title>
</head>
<body>
    <h1>Llista de grups</h1>
    <ul>
        <?php foreach ($grups as $grup): ?>
            <li><?php echo $grup; ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Llista de grups amb posició</h1>
    <ul>
        <?php foreach ($grups as $posicio => $grup): ?>
            <li><?php echo "Posició: $posicio - Grup: $grup"; ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Taula d'estils de grups</h1>
    <table border="1">
        <tr>
            <th>Grup</th>
            <th>Estil</th>
        </tr>
        <?php foreach ($estils as $grup => $estil): ?>
            <tr>
                <td><?php echo $grup; ?></td>
                <td><?php echo $estil; ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2">Total de grups: <?php echo count($estils); ?></td>
        </tr>
    </table>
    <h1>Recorregut invers dels grups i estils</h1>
    <?php recorrerInvers($estils); ?>
    <p>Recorregut normal dels grups i estils:</p>
    <?php foreach ($estils as $grup => $estil): ?>
        <p>Grup: <?=$grup; ?>, Estil: <?=$estil; ?></p>
    <?php endforeach; ?>
</body>
</html>


