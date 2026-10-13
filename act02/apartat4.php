<?php
/*
-	Copia l'array $concerts al teu fitxer. 
 
$concerts = [ 
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0], 
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0], 
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0], 
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0], 
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0], 
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0], 
]; 
 
-	Mostra'l tot en una taula HTML amb les cinc columnes, fent servir foreach i la sintaxi alternativa. 
 
-	Mostra a part el nom del tercer concert accedint-hi directament, sense bucle. 
 
-	Formata el preu amb number_format(). 

*/
$concerts = [ 
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0], 
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0], 
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0], 
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0], 
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0], 
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0], 
]; 

/*
- 	Copia l'array $escenaris: és associatiu als dos nivells. 
 
$escenaris = [ 
    'Gran' => [ 
        'capacitat' => 6000, 
        'coberta'   => 'no', 
        'ubicacio'  => 'Pista central', 
    ], 
    'Petit' => [ 
        'capacitat' => 2500, 
        'coberta'   => 'sí', 
        'ubicacio'  => 'Pavelló', 
    ], 
];  
-	Mostra la capacitat de l'escenari Gran accedint-hi directament. 
 
-	Recorre'l amb dos foreach niats: el de fora per als escenaris i el de dins per als camps de cadascun. 

*/

$escenaris = [ 
    'Gran' => [ 
        'capacitat' => 6000, 
        'coberta'   => 'no', 
        'ubicacio'  => 'Pista central', 
    ], 
    'Petit' => [ 
        'capacitat' => 2500, 
        'coberta'   => 'sí', 
        'ubicacio'  => 'Pavelló', 
    ], 
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartat 4</title>
</head>
<body>
    <h1>Exercici 1</h1>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Escenari</th>
            <th>Hora</th>
            <th>Assistents</th>
            <th>Preu</th>
        </tr>
        <?php foreach ($concerts as $concert): ?>
            <tr>
                <td><?= $concert['nom'] ?></td>
                <td><?= $concert['escenari'] ?></td>
                <td><?= $concert['hora'] ?></td>
                <td><?= $concert['assistents'] ?></td>
                <!-- preu a 2 decimals -->
                <td><?= number_format($concert['preu'], 2) ?> €</td> 
            </tr>
        <?php endforeach; ?>
    </table>
    <p>El nom del tercer concert és: <?= $concerts[2]['nom'] ?></p>

    <h1>Exercici 2</h1>
    <p>La capacitat de l'escenari Gran és: <?= $escenaris['Gran']['capacitat'] ?></p>

    <?php foreach ($escenaris as $escenari => $dades): ?>
        <p><?= $escenari ?>:</p>
        <?php foreach ($dades as $camp => $valor): ?>
            <p><?= $camp ?>: <?= $valor ?></p>
        <?php endforeach; ?>
    <?php endforeach; ?>

</body>
</html>