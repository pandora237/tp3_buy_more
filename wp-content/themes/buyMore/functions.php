<?php
function buymore_enqueue_assets()
{
    wp_enqueue_style('mon-theme-style', get_stylesheet_uri()); 

    wp_enqueue_script('mon-theme-main', get_stylesheet_directory_uri() . '/assets/js/index.js', [], '1.0', true);


    // accueil
    if (is_front_page()) {
        // wp_enqueue_style('accueil-style', get_template_directory_uri() . '/assets/css/home.css');
        wp_enqueue_style('accueil-style', get_stylesheet_directory_uri() . '/assets/css/home.css'); 
    }

    //   contact
    if (is_page('apropos')) {
        wp_enqueue_style('accueil-style', get_template_directory_uri() . '/assets/css/apropos.css');
        wp_enqueue_script('apropos-js', get_template_directory_uri() . '/assets/js/apropos.js', [], '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'buymore_enqueue_assets');
