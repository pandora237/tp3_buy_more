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


// banner
$banner_args = [
    'post_type'      => 'product',
    'posts_per_page' => 3,
    'orderby'        => 'rand',
];
$banner_query = new WP_Query($banner_args);

// MEILLEURES VENTES
$top_rated_args = [
    'post_type'      => 'product',
    'posts_per_page' => 3,
    'meta_key'       => '_wc_average_rating',
    'orderby'        => 'meta_value_num',
    'order'          => 'DESC',
];
$top_rated = new WP_Query($top_rated_args);


// PUB
$pub_args = [
    'post_type'      => 'product',
    'posts_per_page' => 1,
    'orderby'        => 'rand',
];
$pub_query = new WP_Query($pub_args);

?>

<section class="banner-section woocommerce">
    <div class="swiper">
        <div class="swiper-wrapper" id="swiper-wrapper-banner">
            <?php

            if ($banner_query->have_posts()) :
                while ($banner_query->have_posts()) : $banner_query->the_post();
                    global $product;
                    $img = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : wc_placeholder_img_src();
            ?>
                    <div class="swiper-slide">
                        <div class="banner">
                            <div class="banner-content  ">
                                <h1><?php the_title(); ?></h1>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <div class="rate-content rating-and-like">
                                    <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Découvrir</a>
                            </div>
                            <div class="banner-image">
                                <img src="<?php echo esc_url($img); ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else:;
                wp_reset_postdata();
                ?>
                <div class=" swiper-slide">
                    <div class="banner">
                        <div class="banner-content ">
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
                            <div class="slider">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/electronique/casque_sans_fil_-_oraimo_boompop_2s_-_i.jpg"
                                    alt="casque_sans_fil_-_oraimo_boompop_2s">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="swiper-pagination" aria-hidden="true"></div>
    </div>
</section>



<section class="best-seller woocommerce">
    <h2 class="title">Nos Meilleures Ventes</h2>
    <div class="product-grid">
        <?php
        if ($top_rated->have_posts()) :
            while ($top_rated->have_posts()) : $top_rated->the_post();
                global $product;
        ?>
                <article class="product-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<img src="' . wc_placeholder_img_src() . '" alt="Image indisponible">';
                        }
                        ?>
                    </a>
                    <h3><?php the_title(); ?></h3>
                    <p class="descript"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    <div class="rate-content rating-and-like"><?php echo wc_get_rating_html($product->get_average_rating()); ?></div>
                    <p class="price"><?php echo $product->get_price_html(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Découvrir</a>
                </article>
        <?php
            endwhile;
        else :
            echo '<p>Aucun produit trouvé.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
    </div>
    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn see-more">voir plus + </a>
</section>

<section class="pub-product woocommerce">
    <?php
    if ($pub_query->have_posts()) :
        while ($pub_query->have_posts()) : $pub_query->the_post();
            global $product;
            $img = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : wc_placeholder_img_src();
    ?>
            <div class="pub-card">
                <img src="<?php echo esc_url($img); ?>" alt="<?php the_title(); ?>">
                <div class="pub-text">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Découvrir le produit</a>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>


<section class="best-product woocommerce">
    <h2 class="title">Produits Phares</h2>

    <div class="product-content product-grid">
        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 12,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                ),
            ),
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

                            <div class=" rating-and-like">
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
                    <h4><?= $category->name . '( ' . $category->count . ' )' ?></h4>
                </a>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn see-more">voir plus + </a>
    </section>
<?php endif; ?>

<?php get_footer(); ?>