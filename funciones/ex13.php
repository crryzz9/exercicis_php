/*
Include es para incluir un archivo en otro archivo, es decir, permite que el contenido de un 
archivo se inserte en otro archivo antes de que el servidor lo ejecute. Esto es útil 
para reutilizar código y mantener una estructura más organizada en los proyectos.

diferencias entre include y require:
    - include: Si el archivo no se encuentra, genera un warning pero el script continúa ejecutándose.
    - require: Si el archivo no se encuentra, genera un error fatal y detiene la ejecución del script.

include_once y require_once son variantes de include y require que aseguran que el archivo se 
incluya solo una vez durante la ejecución del script, evitando problemas de redefinición de 
funciones o clases.

config.php -> require_once -> constantes i valores fijos.Solo 1 vez
funcions.php -> require_once -> si es declara dues vegades, error fatal
capçalera.php -> require -> sense disseny la pagina no serveis
bloque opcional -> include -> un baner, un avis,...

a partir de ahora haremos esto:
    - config.php: valors que es fan servir a mes d'un lloc, el nom de la botiga, mides minimes,
                    les rutes. No escriu res a la pantalla
    - funcions.php: totes les funciones propies, juntes. Tampoc escriu res a la pantalla
    - capçalera.php:


*/

