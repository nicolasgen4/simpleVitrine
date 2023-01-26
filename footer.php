<?php

//Accès direct interdit
if (!defined('ABSPATH')) {
    http_response_code(403);
    die('Erreur 403 : Forbidden');
}

?>

<footer>

    <section id="navigation-secondaire">
        <h3><?= get_bloginfo('name'); ?></h3>
        <?= wp_nav_menu(
            array(
                'menu' => 'footer',
                'container' => 'nav',
                'theme_location' => 'footer'
            )
        ) ?>
    </section>
</footer>
<?= wp_footer(); ?>
</body>

</html>
