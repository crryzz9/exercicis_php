<?php
/*
-	Amb in_array(), comprova si dos grups concrets són al cartell i mostra un missatge diferent per a cada cas. 
 
-	Escriu la funció buscaGrup(array $llista, string $grup), que torni la posició on és el grup o -1 si no hi és. 
 
-	Prova-la amb un grup que hi sigui i un que no. 

*/
$grups = array("Grup1", "Grup2", "Grup3", "Grup4", "Grup5");

if (in_array("Grup1", $grups, true)) {
    echo "El grup Grup1 està al cartell.<br>";
} else {
    echo "El grup Grup1 no està al cartell.<br>";
}

if (in_array("Grup6", $grups, true)) {
    echo "El grup Grup6 està al cartell.<br>";
} else {
    echo "El grup Grup6 no està al cartell.<br>";
}

function buscaGrup(array $llista, string $grup) {
    foreach ($llista as $index => $valor) {
        if ($valor === $grup) {
            return $index;
        }
    }
    return -1; // Retorna -1 si no es troba el grup
}

echo "Posició del grup Grup1: " . buscaGrup($grups, "Grup1") . "<br>";
echo "Posició del grup Grup6: " . buscaGrup($grups, "Grup6") . "<br>";

/*
-	Crea un array associatiu grup => nombre d'assistents, amb cinc grups. 
 
-	Fes quatre còpies i aplica a cadascuna asort(), arsort(), ksort() i krsort(). 
 
-	Mostra els quatre resultats, cadascun amb el seu títol. 
 
-	Explica en un comentari la diferència entre asort() i ksort(). 

*/
$asistents = array(
    "Grup1" => 150,
    "Grup2" => 200,
    "Grup3" => 100,
    "Grup4" => 250,
    "Grup5" => 300
);

$copia1 = $asistents;
$copia2 = $asistents;
$copia3 = $asistents;
$copia4 = $asistents;

asort($copia1);
arsort($copia2);
ksort($copia3);
krsort($copia4);

// asort() ordena l'array associatiu segons els valors, mentre que ksort() ordena segons les claus


/*
-	Aplica shuffle() a l'array associatiu de l'exercici anterior i mostra'l amb print_r(). 
 
-	Explica què ha passat amb els noms dels grups. 
 
-	Fes-ho bé: barreja un array on els noms dels grups siguin el valor, i mostra l'ordre del sorteig en una llista numerada. 
  

*/

$barrejat = $asistents;
shuffle($barrejat);
// Els noms dels grups s'han perdut perquè shuffle() reordena els valors

$sorteig = $grups;
shuffle($sorteig);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 3</title>
</head>
<body>
    <h3>asort()</h3>
    <p><?php print_r($copia1); ?></p>

    <h3>arsort()</h3>
    <p><?php print_r($copia2); ?></p>

    <h3>ksort()</h3>
    <p><?php print_r($copia3); ?></p>

    <h3>krsort()</h3>
    <p><?php print_r($copia4); ?></p>
    <h3>shuffle()</h3>
    <p><?php print_r($barrejat); ?></p>
    <h3>shuffle() - Sorteig</h3>
    <ol>
        <?php foreach ($sorteig as $grup): ?>
            <li><?= $grup ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>