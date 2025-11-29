<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    $current_user = wp_get_current_user();
    $is_logged_in = is_user_logged_in();

    $cart_count = 0;
    if (class_exists('WooCommerce')) {
        $cart_count = WC()->cart->get_cart_contents_count();
    }

    $icons = [
        'Electronique' => 'fa-tv',
        'Alimentation' => 'fa-utensils',
        'Mode' => 'fa-shirt',
        'Maison' => 'fa-couch',
        'Sports' => 'fa-football-ball',
        'Informatique' => 'fa-laptop',
        'Téléphones' => 'fa-mobile-screen',
    ];

    $categories = get_terms([
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
        'number'     => 4,
        'orderby'    => 'name',
        'order'      => 'ASC',
    ]);
    ?>

    <header>
        <div id="anchor-top"></div>
        <div id="header-block">
        </div>
        <div class="header-menu">
            <nav class="main-nav">
                <div class="content-menu">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo2.png" alt="logo" title="Buy More" height="50">
                        </a>
                    </div>
                </div>

                <div class="search-bar">
                    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                        <input
                            type="text"
                            name="s"
                            placeholder="Rechercher un produit..."
                            value="<?php echo get_search_query(); ?>">

                        <!-- <input type="hidden" name="post_type" value="product"> -->

                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21 19l-5.2-5.2A7.9 7.9 0 0016 9a8 8 0 10-8 8 7.9 7.9 0 004.8-1.7L19 21zM4 9a5 5 0 1110 0A5 5 0 014 9z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="nav-right">
                    <select class="language-selector">
                        <option value="fr">FR</option>
                        <option value="en">EN</option>
                    </select>

                    <div class="profile <?= !$is_logged_in ? 'active' : '' ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#333" viewBox="0 0 24 24">
                            <path
                                d="M12 2a5 5 0 110 10 5 5 0 010-10zm0 12c4.97 0 9 2.91 9 6.5V22H3v-1.5C3 16.91 7.03 14 12 14z" />
                        </svg>

                        <ul class="profile-menu">
                            <?php if ($is_logged_in): ?>
                                <li><a href="<?php echo home_url(); ?>/my-account">Mon compte</a></li>
                                <li><a href="<?php echo wp_logout_url(home_url()); ?>">Déconnexion</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo home_url(); ?>/my-account">Inscription/Connexion</a></li>
                                <!-- <li><a href="<?php echo home_url(); ?>/connexion">Connexion</a></li> -->
                            <?php endif; ?>
                        </ul>
                    </div>

                    <a href="<?php echo wc_get_cart_url(); ?>">
                        <div class="cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#333" viewBox="0 0 24 24">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 
            0c-1.1 0-1.99.9-1.99 2S15.9 22 17 22s2-.9 2-2-.9-2-2-2zm1.83-4.25
            L20.9 6H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 16.37 
            5.48 18 7 18h12v-2H7l1.1-2h9.45c.75 0 1.41-.41 
            1.75-1.05z" />
                            </svg>
                            <?php if ($cart_count > 0 || $is_logged_in): ?>
                                <span class="cart-count"><?php echo $cart_count; ?></span>
                            <?php endif ?>
                        </div>
                    </a>
                </div>
            </nav>

            <?php
            if (!empty($categories) && !is_wp_error($categories)) : ?>
                <div id="menu">
                    <div class="menu-items">
                        <ul class="">
                            <?php foreach ($categories as $category) :
                                $icon_class = isset($icons[$category->name]) ? $icons[$category->name] : 'fa-tag';
                                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                $image = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
                            ?>
                                <li class="menu-item">
                                    <a href="<?php echo esc_url(get_term_link($category)); ?>">
                                        <span><i class="fa-solid <?php echo esc_attr($icon_class); ?>"></i></span>
                                        <span><?php echo esc_html($category->name) . ' ( ' . $category->count . ' ) '; ?></span>
                                    </a>
                                    <?php if ($image): ?>
                                        <div class="img-menu">
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($category->name); ?>">
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>


        </div>
    </header>
    <main class="container">