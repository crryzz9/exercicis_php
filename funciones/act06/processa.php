<?php
// 1. Configuració i funcions
require_once 'config.php';
require_once 'funcions.php';

// 2. Si no ve del formulari, avisem i parem
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $titolPagina = 'Accés directe';
    require 'header.php';
    echo '<div class="resultat">';
    echo '<h2>Aquí no s\'hi arriba directament</h2>';
    echo '<a class="boto tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';
    echo '</div>';
    require 'footer.php';
    exit;
}

// 3. Recollir les dades de l'usuari
$usuari = [
    'nom'        => camp('nom'),
    'cognoms'    => camp('cognoms'),
    'naixement'  => camp('naixement'),
    'telefon'    => camp('telefon'),
    'correu'     => camp('correu'),
    'usuari'     => camp('usuari'),
    'carrer'     => camp('carrer'),
    'poblacio'   => camp('poblacio'),
    'cp'         => camp('cp'),
    'tipus'      => camp('tipus'),
    'origen'     => camp('origen', 'no ho ha dit'),
    // les caselles no marcades no s'envien: isset()
    'butlleti'   => isset($_POST['butlleti']) ? 'Sí' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Sí' : 'No',
];

// contrasenyes a part, no es mostren
$clau  = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';

// confirmació del correu a part, per no repetir-lo a la taula
$correu2 = camp('correu2');

// 4. Validació
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
if ($usuari['correu'] !== $correu2) {
    $errors[] = 'Els correus no coincideixen.';
}
if (strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir mínim ' . MIN_USUARI . ' caràcters.';
}
if (strlen($clau) < MIN_CLAU) {
    $errors[] = 'La contrasenya ha de tenir mínim ' . MIN_CLAU . ' caràcters.';
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

// edat mínima
$edat = 0;
if ($usuari['naixement'] === '') {
    $errors[] = 'La data de naixement és obligatòria.';
} else {
    $edat = edat($usuari['naixement']);
    if ($edat < MIN_EDAT) {
        $errors[] = 'Has de tenir com a mínim ' . MIN_EDAT . ' anys per registrar-te.';
    }
}

// 5. Títol segons si hi ha errors o no
$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

// 6. Capçalera i HTML
require 'header.php';
?>
    <div class="resultat">

    <?php if (count($errors) > 0): ?>
        <div class="errors">
            <h2>No s'ha pogut crear el compte</h2>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a class="boto tornar" href="<?= PAG_FORMULARI ?>">Torna al formulari</a>

    <?php else: ?>
        <div class="benvinguda">
            <h2>Benvingut, <?= htmlspecialchars($usuari['nom']) ?>!</h2>
            <p>El teu correu és <?= htmlspecialchars($usuari['correu']) ?></p>
            <p>Edat: <?= $edat ?> anys</p>
            <p>Camps que has deixat buits: <?= campsBuits($usuari) ?></p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Camp</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuari as $clauCamp => $valor): ?>
                    <tr>
                        <th><?= etiqueta($clauCamp) ?></th>
                        <td><?= htmlspecialchars($valor) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="boto tornar" href="<?= PAG_GRACIES ?>">Continuar</a>

    <?php endif; ?>

    </div>
<?php
// 7. Peu
require 'footer.php';