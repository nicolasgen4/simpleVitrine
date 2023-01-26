<?php

//Accès direct interdit
if (!defined('ABSPATH')) {
    http_response_code(403);
    die('Erreur 403 : Forbidden');
}

?>

<?= get_header(); ?>

<main>
        <h1><?= the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?= the_content(); ?>

        <?php endwhile;
        endif ?>
</main>

<?= get_footer(); ?>
