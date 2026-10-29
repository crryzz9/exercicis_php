<?php
// aquest fitxer té 6 erros: 3 de sintaxi i 3 de logica
// arregla i anota els erros a error-trobats.md quin era, com t'has adonat i com els has resolt

// nom = 'Aina';
$nom= 'Aina'; // falta el $ delante de la variable
// $assignatura = 'Desenvolupament web'
$assignatura = 'Desenvolupament web'; // error 2, falta el ;

$nota1 = 7;
$nota2 = 9;
// $mitjana = $nota1 + $nota2 / 2;
$mitjana = ($nota1 + $nota2) / 2;  // falta los parentesis para que la media sea correcta

echo '<h1>Butlletin de notes</h1>';
// echo '<p>Alumne: $nom</p>';
echo "<p>Alumne: $nom</p>"; // falta el doble comillas para que se muestre la variable
// echo '<p>Assignatura: ' + $assignatura + '</p>';
echo '<p>Assignatura: ' . $assignatura . '</p>'; // se concatena con el .
// echo "<p>Mitjana: $mitjana</p>;
echo "<p>Mitjana: $mitjana</p>"; // falta el cierre de comillas

echo '<p>Generat el ' .date('d/m/Y') . '</p>';



