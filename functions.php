<?php
//Accès direct interdit
if (!defined('ABSPATH')) {
    http_response_code(403);
    die('Erreur 403 : Forbidden');
}

/**
 * ENREGISTRE LES FICHIERS CSS
 * ::avec la fonction wp_enqueue_style
 * @return void
 */
function simplevitrine_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('simplevitrine-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1', 'screen');
    wp_enqueue_style('simplevitrine-fonts', get_template_directory_uri() . '/assets/css/googlefonts.css', array(), '1.0', 'screen');
    wp_enqueue_style('simplevitrine-style', get_template_directory_uri() . '/style.css', array('simplevitrine-fonts', 'simplevitrine-fonts'), $version, 'screen');
    wp_enqueue_style('simplevitrine-tablet', get_template_directory_uri() . '/assets/css/tablet.css', array('simplevitrine-style'), $version, 'screen and (max-width: 1000px)');
    wp_enqueue_style('simplevitrine-mobile', get_template_directory_uri() . '/assets/css/mobile.css', array('simplevitrine-style'), $version, 'screen and (max-width: 550px)');
    wp_enqueue_style('simplevitrine-print', get_template_directory_uri() . '/assets/css/print.css', array('simplevitrine-style'), $version, 'print');
}
add_action('wp_enqueue_scripts', 'simplevitrine_register_styles');

/**
 * AJOUTE LES ELEMENTS DU THEME
 * ::avec la fonction add_theme_support
 * @return void
 */
function simplevitrine_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'simplevitrine_theme_support');


/**
 * AJOUTE LES MENUS DE NAVIGATION
 *::avec la fonction register_nav_menus
 * @return void
 */
function simplevitrine_menus()
{
    $locations = array(
        'primaire' => 'Navigation PC haut de page',
        'footer' => 'Navigation PC pied de page'
    );
    register_nav_menus($locations);
}
add_action('init', 'simplevitrine_menus');
