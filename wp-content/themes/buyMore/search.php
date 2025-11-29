<?php
get_header();

// mot recherché
$keyword = get_search_query();

// Requête WooCommerce : seulement les produits
$args = [
    'post_type' => 'product',
    's' => $keyword,
    'posts_per_page' => -1,
];
$query = new WP_Query($args);

// Nombre de produits trouvés
$count = $query->found_posts;
?>

<main class="container">
    <section class="results" id="results-page">
        <h1 class="title">
            Résultats de recherche de <span>" <?php echo esc_html($keyword); ?> "</span>
        </h1>

        <p class="results-count"><?php echo $count; ?> produits trouvés</p>

        <div class="products-grid woocommerce">

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post();
                    $product = wc_get_product(get_the_ID());
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
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <?php if (!$query->have_posts()) : ?>
            <div class="not-result">
                <i class="fa-solid fa-circle-exclamation fa-3x"></i>
                <p>Aucun résultat pour <span>" <?php echo esc_html($keyword); ?> "</span></p>
                <a class="btn btn-primary" href="<?php echo home_url(); ?>">Go home</a>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
wp_reset_postdata();
get_footer();
