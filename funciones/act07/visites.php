<?php
// session_start() ha d'anar a la PRIMERA línia, abans fins i tot del require de config.php
session_start();
require_once 'config.php';

// Comptador de visites d'aquesta pàgina
$_SESSION['visitesBotiga'] = ($_SESSION['visitesBotiga'] ?? 0) + 1;

$titolPagina = 'Les teves visites';
require 'header.php';
?>
<h2>Les teves visites</h2>
<div class="ok">
    <p>Has visitat aquesta pàgina <strong><?= $_SESSION['visitesBotiga'] ?></strong>
    <?= $_SESSION['visitesBotiga'] === 1 ? 'vegada' : 'vegades' ?>.</p>
</div>
<a class="tornar" href="tanca.php">Tancar la sessió</a>
<?php
require 'footer.php';