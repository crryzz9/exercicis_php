<?php
/**
 * Funcions pròpies del projecte.
 * Aquest fitxer NO escriu res a la pantalla.
 */

/**
 * Recull un camp de text del formulari ja net d'espais.
 *
 * @param string $camp    Nom del camp (l'atribut name del formulari)
 * @param string $defecte Valor si el camp no ha arribat
 * @return string El valor net
 */
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}

/**
 * Converteix la clau de l'array en una etiqueta llegible.
 *
 * @param string $clau Clau de l'array ('cp', 'naixement'...)
 * @return string Etiqueta per mostrar a la taula
 */
function etiqueta(string $clau): string
{
    $noms = [
        'nom'        => 'Nom',
        'cognoms'    => 'Cognoms',
        'naixement'  => 'Data de naixement',
        'telefon'    => 'Telèfon',
        'correu'     => 'Correu electrònic',
        'usuari'     => 'Nom d\'usuari',
        'carrer'     => 'Carrer i número',
        'poblacio'   => 'Població',
        'cp'         => 'Codi postal',
        'tipus'      => 'Tipus de client',
        'origen'     => 'Com ens has conegut',
        'butlleti'   => 'Vol rebre ofertes',
        'condicions' => 'Accepta les condicions',
    ];

    return $noms[$clau] ?? ucfirst($clau);
}

/**
 * Compta quants valors d'un array estan buits.
 *
 * @param array $dades Array associatiu amb les dades de l'usuari
 * @return int Nombre de camps que estan buits
 */
function campsBuits(array $dades): int
{
    $buits = 0;
    foreach ($dades as $valor) {
        if ($valor === '') {
            $buits++;
        }
    }
    return $buits;
}

/**
 * Calcula l'edat en anys a partir d'una data de naixement.
 *
 * @param string $data Data de naixement en format AAAA-MM-DD
 * @return int Edat en anys complerts (0 si la data no és vàlida)
 */
function edat(string $data): int
{
    $naixement = DateTime::createFromFormat('Y-m-d', $data);
    if ($naixement === false) {
        return 0;
    }
    return $naixement->diff(new DateTime())->y;
}