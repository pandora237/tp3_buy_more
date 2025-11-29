<?php
function buy_more_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'buy_more_add_woocommerce_support');
function buymore_enqueue_assets()
{
    // --- CSS principal du thème ---
    wp_enqueue_style('buymore-style', get_stylesheet_uri());

    // --- JS principal du thème ---
    wp_enqueue_script('buymore-main', get_stylesheet_directory_uri() . '/assets/js/index.js', [], '1.0', true);

    // ---libs
    wp_enqueue_style('swipper-css-style', get_stylesheet_directory_uri() . '/assets/libs/swipper/css/swiper-bundle.min.css');
    wp_enqueue_script('swipper-js-main', get_stylesheet_directory_uri() . '/assets/libs/swipper/js/swiper-bundle.min.js', [], '1.0', true);

    // --- Page d'accueil ---
    if (is_front_page()) {
        wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/assets/css/home.css');
        wp_enqueue_script('home-main', get_stylesheet_directory_uri() . '/assets/js/home.js', [], '1.0', true);
    }
    //CSS/JS page panier
    if (is_page('cart')) {
        wp_enqueue_style('panier-style', get_stylesheet_directory_uri() . '/assets/css/panier.css');
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
    if (is_page('politique_de_confidentialite')) {
        wp_enqueue_style('politique_de_confidentialite-style', get_stylesheet_directory_uri() . '/assets/css/politique_de_confidentialite.css');
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
    }
    // CSS/JS page listeproduits
    if (is_page('listeproduits')) {
        wp_enqueue_style('listeproduits-style', get_stylesheet_directory_uri() . '/assets/css/listeProduits.css');
    }

    // CSS/JS page fiche-produit
    if (is_product()) {
        wp_enqueue_style('fiche-produit-style', get_stylesheet_directory_uri() . '/assets/css/produit.css');
        wp_enqueue_script('buymore-produit', get_stylesheet_directory_uri() . '/assets/js/produit.js', [], '1.0', true);
    }

    // CSS/JS page 404
    if (is_page('404')) {
        wp_enqueue_style('404-style', get_stylesheet_directory_uri() . '/assets/css/404.css');
    }

    // CSS/JS page FAQ
    if (is_page('FAQ')) {
        wp_enqueue_style('FAQ-style', get_stylesheet_directory_uri() . '/assets/css/FAQ.css');
    }

    // CSS/JS page equipe
    if (is_page('equipe')) {
        wp_enqueue_style('equipe-style', get_stylesheet_directory_uri() . '/assets/css/equipe.css');
    }


    // CSS/JS page mon-compte
    if (is_page('mon-compte')) {
        wp_enqueue_style('mon-compte-style', get_stylesheet_directory_uri() . '/assets/css/mon-compte.css');
    }
    // CSS/JS page commandes
    if (is_page('commandes')) {
        wp_enqueue_style('commandes-style', get_stylesheet_directory_uri() . '/assets/css/commandes.css');
    }

    // CSS/JS page livraison_et_retour
    if (is_page('livraison_et_retour')) {
        wp_enqueue_style('livraison_et_retour-style', get_stylesheet_directory_uri() . '/assets/css/livraison_et_retour.css');
    }
}

add_action('wp_enqueue_scripts', 'buymore_enqueue_assets');


function custom_remove_hooks()
{
    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}
add_action('template_redirect', 'custom_remove_hooks');


// // 
// add_filter('wc_get_template', function ($template, $template_name, $args, $path, $default_path) {
//     if ($template_name === 'cart/cart.php') {
//         echo "<div style='background:red;color:white;padding:15px;'>TEMPLATE UTILISÉ : $template</div>";
//     }
//     return $template;
// }, 10, 5);
