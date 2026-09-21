<?php 
    echo 'Hola';
    echo '<br>';
    echo 'Hola', ' ', 'mon';
    echo '<p>Text</p>';

    print('Hola'); // retorna
    $x = 5; // afegim la variable per evitar error
    var_dump($x); // per depurar
    $dades = 'Carrer Lacy, 34, Sabadell 08202'; // afegim la variable per evitar error
    print_r($dades); // llegible

    $nom = 'Victor';
    $edat = 20;
    $actiu = true;

    $nom = 'Rodolfo'; // es pot canviar el valor de la variable
    $total = $edat + 1; // es poden fer operacions amb variables
    echo '<br>';
    echo $nom;

    $x = 5;
    $x = 'cinc'; // es pot canviar el tipus de la variable

    $a = '10' + 5; // 15, int
    $b = '10' . 5; // 105, concatena el string amb el número

    var_dump($a, $b);
    
    $nombre = 'Victor';
    echo "Hola $nombre" . "<br>"; // Hola Victor
    echo 'Hola $nombre'; // Hola $nombre
    echo "<br>";

    $punts = 0;
    echo 'Hola ' . $nombre . ' tens ' . $punts . ' punts';
    echo "<br>";
    echo "Hola $nombre tens $punts punts";
    echo "<br>";
    echo "Hola {$nombre} tens {$punts} punts";


    define('IVA', 0.21); // defineix una constant
    echo '<br>';
    const BOTIGA = 'Ca la web'; // defineix una constant
    
    echo BOTIGA;

    $base = 100; // creem la variable per a que no doni error
    $total = $base * (1 + IVA); // utilitza la constant

    // IVA = 0.10 da error

    $missatge = 'Hola'; // ambit global

    function saluda(){
        $intern = 'Adeu'; // ambit local
        echo $intern; 
    }
    echo '<br>';
    echo $missatge;
    echo '<br>';
    saluda(); // crida a la funció

    // declare(strict_types=1); // obliga a que els tipus de dades siguin estrictes
    // ini_set('display_errors', 1); // mostra els errors
    // error_reporting(E_ALL); // mostra tots els errors
    // setlocale() . date_default_timezone_set() // per establir la localització i la zona horària
    
?>