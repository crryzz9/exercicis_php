<?php
// si no ve del formulari, avisem i parem
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Has d\'arribar aqui des del formulari. ';
    echo '<a href="registre.html">Torna-hi</a></p>';
    exit;
}

// dades de l'usuari
$usuari = [
    'nom'        => trim($_POST['nom'] ?? ''),
    'cognoms'    => trim($_POST['cognoms'] ?? ''),
    'naixement'  => trim($_POST['naixement'] ?? ''),
    'telefon'    => trim($_POST['telefon'] ?? ''),
    'correu'     => trim($_POST['correu'] ?? ''),
    'usuari'     => trim($_POST['usuari'] ?? ''),
    'carrer'     => trim($_POST['carrer'] ?? ''),
    'poblacio'   => trim($_POST['poblacio'] ?? ''),
    'cp'         => trim($_POST['cp'] ?? ''),
    'tipus'      => trim($_POST['tipus'] ?? ''),
    'origen'     => trim($_POST['origen'] ?? ''),
    'butlleti'   => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

// contrasenyes a part, no es mostren
$clau = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';

// confirmacio del correu a part, per no repetir-lo a la taula
$correu2 = trim($_POST['correu2'] ?? '');

// validacio
$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}
if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}
if ($usuari['correu'] === '') {
    $errors[] = 'El correu és obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no té un format vàlid.';
}
// ampliacio: confirmacio del correu
if ($usuari['correu'] !== $correu2) {
    $errors[] = 'Els correus no coincideixen.';
}
if (strlen($usuari['usuari']) < 4) {
    $errors[] = 'El nom d\'usuari ha de tenir mínim 4 caràcters.';
}
if (strlen($clau) < 6) {
    $errors[] = 'La contrasenya ha de tenir mínim 6 caràcters.';
}
if ($clau !== $clau2) {
    $errors[] = 'Les contrasenyes no coincideixen.';
}
if ($usuari['cp'] !== '' && strlen($usuari['cp']) !== 5) {
    $errors[] = 'El codi postal ha de tenir 5 xifres.';
}
if ($usuari['tipus'] === '') {
    $errors[] = 'Has de triar un tipus de client.';
}
if (!isset($_POST['condicions'])) {
    $errors[] = 'Has d\'acceptar les condicions.';
}

// ampliacio: edat minima 16 anys
$edat = 0;
if ($usuari['naixement'] === '') {
    $errors[] = 'La data de naixement és obligatòria.';
} else {
    $naixement = new DateTime($usuari['naixement']);
    $avui = new DateTime();
    $edat = $naixement->diff($avui)->y;

    if ($edat < 16) {
        $errors[] = 'Has de tenir com a mínim 16 anys per registrar-te.';
    }
}

// funcions
function etiqueta($camp) {
    $noms = [
        'nom' => 'Nom',
        'cognoms' => 'Cognoms',
        'naixement' => 'Data de naixement',
        'telefon' => 'Telèfon',
        'correu' => 'Correu',
        'usuari' => 'Usuari',
        'carrer' => 'Carrer',
        'poblacio' => 'Població',
        'cp' => 'Codi postal',
        'tipus' => 'Tipus de client',
        'origen' => 'Com ens has conegut',
        'butlleti' => 'Butlletí',
        'condicions' => 'Condicions',
    ];
    return $noms[$camp] ?? $camp;
}

function campsBuits($dades) {
    $buits = 0;
    foreach ($dades as $valor) {
        if ($valor === '') {
            $buits++;
        }
    }
    return $buits;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Ampeterby7</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="resultat">

    <?php if (count($errors) > 0): ?>
        <h2>No s'ha pogut crear el compte</h2>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="registre.html">Torna al formulari</a>

    <?php else: ?>
        <h2>Benvingut, <?= htmlspecialchars($usuari['nom']) ?>!</h2>
        <p>El teu correu és <?= htmlspecialchars($usuari['correu']) ?></p>
        <p>Edat: <?= $edat ?> anys</p>

        <table>
            <tr>
                <th>Camp</th>
                <th>Valor</th>
            </tr>
            <?php foreach ($usuari as $camp => $valor): ?>
                <tr>
                    <td><?= etiqueta($camp) ?></td>
                    <td><?= htmlspecialchars($valor) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    <?php endif; ?>

    </div>
</body>
</html>