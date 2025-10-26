<?php
function buymore_enqueue_assets()
{
    // CSS principal
    wp_enqueue_style('buymore-style', get_stylesheet_uri());

    // JS principal
    wp_enqueue_script('buymore-main', get_stylesheet_directory_uri() . '/assets/js/index.js', [], '1.0', true);

    // CSS/JS page d'accueil
    if (is_front_page()) {
        wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/assets/css/home.css');
    }

    // CSS/JS page À propos
    if (is_page('apropos')) {
        wp_enqueue_style('apropos-style', get_stylesheet_directory_uri() . '/assets/css/apropos.css');
    }
}
add_action('wp_enqueue_scripts', 'buymore_enqueue_assets');
