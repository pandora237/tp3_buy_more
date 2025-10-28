<?php
function buymore_enqueue_assets()
{
    // --- CSS principal du thème ---
    wp_enqueue_style('buymore-style', get_stylesheet_uri());

    // --- JS principal du thème ---
    wp_enqueue_script('buymore-main', get_stylesheet_directory_uri() . '/assets/js/index.js', [], '1.0', true);

    // --- Page d'accueil ---
    if (is_front_page()) {
        wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/assets/css/home.css');
    }

    // --- Page À propos ---
    if (is_page('apropos')) {
        wp_enqueue_style('apropos-style', get_stylesheet_directory_uri() . '/assets/css/apropos.css');
    }

    // --- Page Connexion ---
    if (is_page('connexion')) {
        wp_enqueue_style('connexion-style', get_stylesheet_directory_uri() . '/assets/css/connexion.css');
        wp_enqueue_style('index-style', get_stylesheet_directory_uri() . '/assets/css/index.css');
    }

    // --- Page Inscription ---
    if (is_page('inscription')) {
        wp_enqueue_style('inscription-style', get_stylesheet_directory_uri() . '/assets/css/connexion.css');
        wp_enqueue_style('index-style', get_stylesheet_directory_uri() . '/assets/css/index.css');
    }
}
add_action('wp_enqueue_scripts', 'buymore_enqueue_assets');
