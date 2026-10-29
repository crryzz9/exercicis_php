<?php
/*
-	Crea $grups amb assignació directa: cinc grups, i fes que un vagi 
    a la posició 8 i el següent sense indicar posició. 
 
-	Crea $estils amb array() i $edicions amb range(2019, 2026). 
 
-	Parteix una frase en paraules amb explode() i desa-la a $paraules. 
 
-	Mostra els quatre arrays amb print_r() dins del <pre> (busca informació 
    de què és <pre> i de com s’utilitza i fes-ho amb <pre>). 
 
-	Mostra un dels arrays amb print_r(), var_dump() i var_export(), i escriu en 
    un comentari quina diferència hi veus. 

*/
$grups[0] = 'Grup1';
$grups[]  = 'Grup2';     
$grups[]  = 'Grup3';
$grups[8] = 'Grup4';  // va a la 8
$grups[]  = 'Grup5';  // va a la 9

$estils = array("denim", "clasic", "sport", "formal", "cani");
$edicions = range(2019, 2026);

$frase = "Hola Alejandra, esto es una actividad";
$paraules = explode(" ", $frase);

echo "<pre>";
print_r($grups);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($estils);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($edicions);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($paraules);
echo "</pre>";
echo "<br>";

print_r($estils);
var_dump($estils);
var_export($estils);
// print_r() muestra la información de una manera legible para los humanos
// var_dump() muestra información más detallada incluyendo el tipo de datos y la longitud
// var_export() devuelve una representación leible del valor que puede ser utilizada como código PHP


/*
-	Crea $estils com a array associatiu on la clau sigui el nom del grup i el valor, el seu estil musical. Posa'n dos amb assignació directa i dos més amb array(). 
 
-	Mostra per pantalla l'estil d'un grup concret accedint-hi per la clau. 
 
-	Afegeix-hi un grup nou i mostra l'array sencer amb print_r(). 
 
-	Mostra quants grups hi ha amb count(). 

*/

$estils = array(
    "Lil Baby" => "Hip Hop",
    "Bad Bunny" => "Reggaeton",
);
$estils["The Weeknd"] = "R&B";
$estils["ACDC"] = "Rock";

echo "<pre>";
echo $estils["Lil Baby"];
echo "<br>";
$estils["Ampeterby7"] = "Rap";

echo "<pre>";
print_r($estils);
echo "</pre>";
echo "<br>";
echo "El nombre de grups és: " . count($estils);

/*
-	Crea un array de cinc grups amb índexs numèrics i mostra count(). 
 
-	Esborra el tercer grup amb unset() i torna a mostrar l'array i el count(). 
 
-	Afegeix-hi un grup nou amb [] i mira a quina posició ha anat a parar. 
 
-	Explica en un comentari per què, després d'un unset(), un bucle for de 0 a count()-1 pot fallar. 
 
*/

$numeric = array(1, 2, 3, 4, 5);
echo count($numeric);
echo "<br>";

unset($numeric[2]);

echo "<pre>";
print_r($numeric);
echo "</pre>";
echo "<br>";
echo "El nombre de grups és: " . count($numeric);
echo "<br>";

$numeric[] = 6;
echo "<pre>";
print_r($numeric);
echo "</pre>";
echo "<br>";

// Després d'un unset(), l'índex del tercer grup (2) ja no existeix, per tant, si fem un bucle 
// for de 0 a count()-1, intentarem accedir a un índex que no existeix, el que pot provocar errors

?>