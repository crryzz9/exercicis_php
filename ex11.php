<?php

// funciones con strings
$cadena = "Hola";

$cadena[0] = "C"; 

echo "Ahora la cadena es: $cadena" . "<br>"; // se ha cambiado la primera letra de la cadena, ahora es "Cola"

// strlen() devuelve la longitud de una cadena
$cadena = "Aquesta cadena té moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caracters es: " . $num_caracters . "<br>";

// strpos() devuelve la casilla en la que se encuentra un caracter dentro de una cadena, si no lo encuentra devuelve false
$email ="hola@jviladoms.cat";
echo "Posició del @: " . strpos($email, "@") . "<br>";

// strcmp() compara dos cadenas, si son iguales devuelve 0, si la primera es mayor devuelve un numero positivo y si la segunda es mayor devuelve un numero negativo
$cad1 = "ale";
$cad2 = "pepe";
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2) . "<br>";

// substr() devuelve una subcadena de caracteres de una cadena, a partir de una posición especificada fins al final y con una longitud determinada. La cadena original no se modifica
$cadena = "PHP es un lenguaje facil";
echo "El substr de 0-3 es: " . substr($cadena, 0, 3) . "<br>"; // devuelve "PHP"
echo "El substr de 18" . substr($cadena, 18) . "<br>"; // devuelve "facil"

// trim() elimina los espacios en blanco al principio y al final de una cadena
echo "Ejemplo con trim: " . trim("   Hola   ") . "<br>"; // devuelve "Hola"

// ltrim: elimina los espacios en blanco al principio de una cadena
echo "Ejemplo con ltrim: " . ltrim(" ?  Hola      ? ") . "<br>"; // devuelve "Hola   "

// rtrim: elimina los espacios en blanco al final de una cadena
echo "Ejemplo con rtrim: " . rtrim(" ?  Hola     ?  ") . "<br>"; // devuelve "   Hola"

// str_replace($antigua, $nueva, $cadena) reemplaza una subcadena por otra dentro de una cadena
// la cadena $antigua se reemplaza por la cadena $nueva dentro de la cadena $cadena
$cadena = "PHP es facil";
$antigua = "facil";
$nueva = "difícil";
$cadena = str_replace($antigua, $nueva, $cadena);
echo "Ahora la cadena es: $cadena" . "<br>"; // devuelve "PHP es difícil"

// ereg_replace / eregi_replace: 
// ereg_replace reemplaza una subcadena por otra dentro de una cadena, usando expresiones regulares
// eregi_replace reemplaza una subcadena por otra dentro de una cadena, usando expresiones regulares sin distinguir mayúsculas y minúsculas

// strlower($cadena) devuelve la cadena en minúsculas
echo "Ahora la cadena es: " . strtolower($cadena) . "<br>"; // devuelve "php es difícil"
// strtoupper($cadena) devuelve la cadena en mayúsculas
echo "Ahora la cadena es: " . strtoupper($cadena) . "<br>"; // devuelve "PHP ES DIFÍCIL"

// explode: permite dividir una cadena segun un caracter o patron

// Exercici 1: Busca en php.net la funcion str_word_count() y pon un ejemplo



// Exercici 2: Funcion levenshtein() y pon un ejemplo

// Exercici 3: Funcion que es el operador ternario (?) y pon un ejemplo

// Exercici 4: explica que hace esta funcion:
function funcioMultipleReturns($v1, $v2, $v3) {
    $v1 = "variable 1";
    $v2 = "variable 2";
    $v3 = "variable 3";
    return array($v1, $v2, $v3);
}

// Exercici 5: Crea una funcion comprova_email() que reciba una cadena como parametro y hace las siguientes:
// comprobaciones: 

// - convertir a minusculas la cadena
// - eliminar todos los espacios en blanco al principio y al final de la cadena
// - comprobar que la cadena contiene un @
// - contar el numero de caracteres de la cadena

// FALTAAAAA!!

?>