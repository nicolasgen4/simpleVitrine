<?php

/**
 * ENREGISTRE LES FICHIERS CSS
 * ::avec la fonction wp_enqueue_style
 * @return void
 */
function simplevitrine_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('simplevitrine-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0', 'screen');
    wp_enqueue_style('simplevitrine-fonts', get_template_directory_uri() . '/assets/css/googlefonts.css', array(), '1.0', 'screen');
    wp_enqueue_style('simplevitrine-style', get_template_directory_uri() . '/style.css', array('simplevitrine-fonts', 'simplevitrine-fonts'), $version, 'screen');
    wp_enqueue_style('simplevitrine-tablet', get_template_directory_uri() . '/assets/css/tablet.css', array('simplevitrine-style'), $version, 'screen and (max-width: 1720px)');
    wp_enqueue_style('simplevitrine-mobile', get_template_directory_uri() . '/assets/css/mobile.css', array('simplevitrine-style'), $version, 'screen and (max-width: 580px)');
    wp_enqueue_style('simplevitrine-print', get_template_directory_uri() . '/assets/css/print.css', array('simplevitrine-style'), $version, 'print');
}
add_action('wp_enqueue_scripts', 'simplevitrine_register_styles');


/**
 * ENREGISTRE LES FICHIERS JS
 * ::avec la fonction wp_enqueue_script
 * @return void
 */
function simplevitrine_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('simplevitrine-script', get_template_directory_uri() . '/assets/js/script.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'simplevitrine_register_scripts');


/**
 * AJOUTE LE TITLE DYNAMIQUEMENT
 * ::avec la fonction add_theme_support
 * @return void
 */
function simplevitrine_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'simplevitrine_theme_support');
