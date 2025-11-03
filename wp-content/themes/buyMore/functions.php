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
    //CSS/JS page panier
    if(is_page('panier')){
        wp_enqueue_style('panier-style',get_stylesheet_directory_uri() .'/assets/css/panier.css');
        wp_enqueue_script('panier', get_stylesheet_directory_uri() . '/assets/js/panier.js', [], '1.0', true);
    }

    // --- Page À propos ---
    if (is_page('apropos')) {
        wp_enqueue_style('apropos-style', get_stylesheet_directory_uri() . '/assets/css/apropos.css');
    }

    // CSS/JS page À propos
    if (is_page('livraison')) {
        wp_enqueue_style('livraison-style', get_stylesheet_directory_uri() . '/assets/css/livraison.css');
    }
    // CSS/JS page À politique de confidentialité
    if (is_page('politique_de_confidentialité')) {
        wp_enqueue_style('politique_de_confidentialité-style', get_stylesheet_directory_uri() . '/assets/css/politique_de_confidentialité.css');
    }
    // CSS/JS page paiement
    if (is_page('paiement')) {
        wp_enqueue_style('paiement-style', get_stylesheet_directory_uri() . '/assets/css/paiement.css');
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
    // CSS/JS page listeproduits
    if (is_page('listeproduits')) {
        wp_enqueue_style('listeproduits-style', get_stylesheet_directory_uri() . '/assets/css/listeProduits.css');
    }
}


add_action('wp_enqueue_scripts', 'buymore_enqueue_assets');
