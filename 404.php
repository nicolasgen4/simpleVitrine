<?php

//Accès direct interdit
if (!defined('ABSPATH')) {
    http_response_code(403);
    die('Erreur 403 : Forbidden');
}

?>

<?= get_header(); ?>

<main>
        <h1>Erreur</h1>
</main>

<?= get_footer(); ?>
