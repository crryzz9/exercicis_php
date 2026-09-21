<?php 
    echo 'Hola';
    echo 'Hola', ' ', 'mon';
    echo '<p>Text</p>';

    print('Hola'); // retorna
    var_dump($x); // per depurar
    print_r($dades); // llegible

    $nom = 'Victor';
    $edat = 20;
    $actiu = true;

    $nom = 'Rodolfo'; // es pot canviar el valor de la variable
    $total = $edat + 1; // es poden fer operacions amb variables
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
    echo 'Hola ' . $nombre . ', tens ' . $punts . 'punts';
    echo "<br>";
    echo "Hola $nombre tens $punts punts";
    echo "<br>";
    echo "Hola {$nombre} tens {$punts} punts";


    define('IVA', 0.21); // defineix una constant
    const BOTIGA = 'Ca la web'; // defineix una constant
    echo BOTIGA;
    $total = $base * (1 + IVA); // utilitza la constant

    // IVA = 0.10 da error

    $missatge = 'Hola'; // ambit global

    function saluda(){
        echo $missatge; // no es pot accedir a la variable global
        $intern = 'Adeu'; // ambit local
    }

    saluda(); // crida a la funció
    echo $intern; // dona error, no es pot accedir a la variable local

    // declare(strict_types=1); // obliga a que els tipus de dades siguin estrictes
    // ini_set('display_errors', 1); // mostra els errors
    // error_reporting(E_ALL); // mostra tots els errors
    // setlocale() . date_default_timezone_set() // per establir la localització i la zona horària
    
?>