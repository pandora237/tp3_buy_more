<?php get_header(); ?>

<?php
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

<section class="">
    <div class="banner">
        <div class="banner-content">
            <h1>Bienvenue sur Buy More</h1>
            <p>Découvrez nos meilleures offres et promotions du moment.</p>
            <div class="rate-content">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <a href="/pages/produit.html" class="btn btn-primary">Découvrir</a>
        </div>
        <div class="banner-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/category/cat1.png" alt="Q7B7-Available-Now-Glotelho-Banner">
        </div>
    </div>
</section>

<section class="best-seller">
    <h2 class="title">Nos Meilleures Ventes</h2>
    <div class="product-grid">
        <article class="product-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/electronique/casque_sans_fil_-_oraimo_boompop_2s_-_i.jpg" alt="Produit 1">
            <h3>Casque Bluetooth</h3>
            <p class="descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quia modi
                perspiciatis est, ....</p>
            <div class="rate-content">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p class="price">15 000 FCFA</p>
            <a href="/pages/produit.html" class="btn btn-secondary">Découvrir</a>
        </article>

        <article class="product-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/category/cat1.png" alt="">
            <h3>Montre Connectée</h3>
            <p class="descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quia modi
                perspiciatis est, ....</p>
            <div class="rate-content">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p class="price">12 500 FCFA</p>
            <a href="/pages/produit.html" class="btn btn-secondary">Découvrir</a>
        </article>

        <article class="product-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/electronique/disque dur 4t0.png" alt=" ">
            <h3>Montre Connectée</h3>
            <p class="descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quia modi
                perspiciatis est, ....</p>
            <div class="rate-content">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p class="price">12 500 FCFA</p>
            <a href="/pages/produit.html" class="btn btn-secondary">Découvrir</a>
        </article>

    </div>
    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn see-more">voir plus + </a>
</section>

<section class="pub-product">
    <div class="pub-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/Q7B7-Available-Now-Glotelho-Banner-933px335px.webp"
            alt="Promo Accessoires">
        <div class="pub-text">
            <h3>Promo Accessoires</h3>
            <p>-20% sur tous les accessoires jusqu'à dimanche !</p>
            <a href="/pages/accessoires.html" class="btn btn-secondary">Profiter de l'offre</a>
        </div>
    </div>
</section>


<section class="best-product">
    <h2 class="title">Produits Phares</h2>

    <div class="product-content product-grid">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12,
            'meta_key' => '_featured',
            'meta_value' => 'yes',
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post();
                global $product;
        ?>
                <div class="box-product">
                    <div class="image">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            } else {
                                echo '<img src="' . wc_placeholder_img_src() . '" alt="Image indisponible">';
                            }
                            ?>
                        </a>
                    </div>

                    <div class="content">
                        <div class="description">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

                            <?php if ($product->is_on_sale()) : ?>
                                <p class="type">Promo</p>
                            <?php elseif ($product->is_featured()) : ?>
                                <p class="type">Nouveau</p>
                            <?php endif; ?>

                            <div>
                                <!-- Évaluation du produit -->
                                <div class="rating">
                                    <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                                </div>

                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>

                            <p class="price"><?php echo $product->get_price_html(); ?></p>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary position-btn">Découvrir</a>
                    </div>
                </div>
        <?php
            endwhile;
        else :
            echo '<p class="">Aucun produit trouvé pour le moment.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn see-more">Voir plus +</a>
</section>

<section class="best-product">
    <h2 class="title">Produits Phares</h2>
    <div class="product-content product-grid">
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
        <div class="box-product">
            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Casque</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <p class="type">New</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <p class="price">5000 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>
        </div>
        <div class="box-product">

            <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a>
            </div>
            <div class="content">
                <div class="description">
                    <h3><a href="">Chawama</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                    <div>
                        <div class="rating"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>

                    <p class="price">1500 FCFA</p>
                </div>
                <a href="/pages/produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
            </div>

        </div>
    </div>
    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn see-more">voir plus + </a>
</section>

<?php

if (!empty($categories) && !is_wp_error($categories)) : ?>
    <section class="best-categories">
        <h2 class="title">Catégories Populaires</h2>
        <div class="category-grid">
            <?php foreach ($categories as $category) :
                $icon_class = isset($icons[$category->name]) ? $icons[$category->name] : 'fa-tag';
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : null;
            ?>
                <a href="<?php echo esc_url(get_term_link($category)); ?>" class="category-card">
                    <?php
                    $image = $image ? $image : (get_stylesheet_directory_uri() . '/assets/img/category/cat1.png');
                    ?>
                    <img src="<?php echo $image; ?>" alt="<?= $category->name ?>">
                    <h4><?= $category->name ?></h4>
                </a>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn see-more">voir plus + </a>
    </section>
<?php endif; ?>

<?php get_footer(); ?>