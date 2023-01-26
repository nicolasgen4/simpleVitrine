<?php

//Accès direct interdit
if (!defined('ABSPATH')) {
    http_response_code(403);
    die('Erreur 403 : Forbidden');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/assets/images/favicon.png' ?>" type="image/x-icon">

    <?= wp_head(); ?>

</head>

<body>

    <header>
        <div id="navigation-principale">
            <?php if (function_exists('the_custom_logo')) : ?>
                <?= the_custom_logo(); ?>
            <?php endif ?>

            <?= wp_nav_menu(
                array(
                    'menu' => 'primaire',
                    'container' => 'nav',
                    'theme_location' => 'primaire'

                )
            ) ?>
        </div>
    </header>
