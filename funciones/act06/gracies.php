<?php
require_once 'config.php';
$titolPagina = 'Gràcies';
require 'header.php';
?>
    <div class="resultat">
        <h2>Gràcies per registrar-te</h2>
        <div class="ok">
            <p>El teu compte de <?= BOTIGA_NOM ?> ja està actiu.
            Si tens cap problema, escriu-nos a <?= BOTIGA_CORREU ?>.</p>
        </div>
        <a class="boto tornar" href="<?= PAG_FORMULARI ?>">Registrar un altre compte</a>
    </div>
<?php
require 'footer.php';