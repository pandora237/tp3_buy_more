<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop');
?>
<div class="product-page">

    <?php
    wc_print_notices();
    ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php
        global $product;
        $product = wc_get_product(get_the_ID());
        if (!$product) continue;
        ?>

        <nav class="breadcrumb">
            <a href="<?php echo home_url(); ?>">Accueil</a>
            <span>/</span>

            <?php
            $terms = get_the_terms($product->get_id(), 'product_cat');
            if ($terms && !is_wp_error($terms)) {
                $term = array_shift($terms);
                echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a><span>/</span>';
            }
            ?>

            <span><?php the_title(); ?></span>
        </nav>

        <form class="product-detail cart" id="product-detail" method="post">

            <!-- GALERIE -->
            <div class="product-gallery">

                <div class="main-image">
                    <?php
                    $main_id = $product->get_image_id();
                    $main = $main_id ? wp_get_attachment_image_url($main_id, 'full') : wc_placeholder_img_src();
                    ?>
                    <img id="mainImage" src="<?php echo esc_url($main); ?>" alt="<?php the_title(); ?>">
                </div>

                <div class="thumbnail-container">
                    <?php
                    // IMAGE PRINCIPALE
                    echo '<img class="thumbnail active" src="' . esc_url($main) . '" data-full="' . esc_url($main) . '" onclick="changeImage(this)">';

                    // GALERIE
                    $gallery = $product->get_gallery_image_ids();

                    if (!empty($gallery)) {
                        foreach ($gallery as $img_id) {
                            $thumb = wp_get_attachment_image_url($img_id, 'thumbnail');
                            $full  = wp_get_attachment_image_url($img_id, 'full');

                            if (!$thumb) $thumb = $full;
                            if (!$full)  $full  = $thumb;

                            echo '<img class="thumbnail" src="' . esc_url($thumb) . '" data-full="' . esc_url($full) . '" onclick="changeImage(this)">';
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- INFOS PRODUIT -->
            <div class="product-info">

                <h1><?php the_title(); ?></h1>

                <!-- MARQUE -->
                <?php
                $brand = '';
                $brands = get_the_terms($product->get_id(), 'product_brand');

                if ($brands && !is_wp_error($brands)) {
                    $brand = $brands[0]->name;
                } elseif ($product->get_attribute('brand')) {
                    $brand = $product->get_attribute('brand');
                }

                if ($brand) :
                ?>
                    <p class="brand">Marque: <strong><?php echo esc_html($brand); ?></strong></p>
                <?php endif; ?>

                <!-- NOTES -->
                <div class="rating">
                    <?php
                    $rating_count = $product->get_rating_count();
                    $average = $product->get_average_rating();
                    ?>
                    <span class="stars">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo ($i <= $average)
                                ? '<i class="fas fa-star"></i>'
                                : '<i class="far fa-star"></i>';
                        }
                        ?>
                    </span>
                    <span class="reviews">(<?php echo $rating_count; ?> avis)</span>
                </div>

                <div class="price-stock-wrapper">
                    <p class="price"><?php echo $product->get_price_html(); ?></p>

                    <?php if ($product->is_type('variable')) : ?>
                        <p class="availability stock" style="display:none;"></p>
                    <?php else : ?>
                        <p class="availability stock">
                            <?php echo $product->is_in_stock() ? '<span class="in-stock">Disponible en stock</span>' : '<span class="out-of-stock">Rupture de stock</span>'; ?>
                        </p>
                    <?php endif; ?>
                </div>

                <!-- OPTIONS / VARIATIONS -->
                <div class="product-options">
                    <?php if ($product->is_type('variable')) : ?>
                        <?php
                        $attrs = $product->get_variation_attributes();
                        foreach ($attrs as $name => $options) :
                        ?>
                            <label><?php echo wc_attribute_label($name); ?> :</label>
                            <select name="attribute_<?php echo esc_attr(sanitize_title($name)); ?>">
                                <option value="">Choisir une option</option>
                                <?php
                                foreach ($options as $opt) {
                                    echo '<option value="' . esc_attr($opt) . '">' . esc_html($opt) . '</option>';
                                }
                                ?>
                            </select>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if ($product->is_in_stock()) : ?>
                        <label>Quantité:</label>
                        <?php woocommerce_quantity_input(); ?>
                    <?php endif; ?>
                </div>

                <!-- ACTIONS -->
                <div class="action-buttons">

                    <?php if ($product->is_in_stock()) : ?>
                        <button type="submit"
                            name="add-to-cart"
                            value="<?php echo esc_attr($product->get_id()); ?>"
                            class="btn-add-to-cart single_add_to_cart_button">
                            <i class="fas fa-shopping-cart"></i> Ajouter au panier
                        </button>
                    <?php else : ?>
                        <button disabled class="btn-add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Rupture de stock
                        </button>
                    <?php endif; ?>

                    <?php
                    $num = get_option('woocommerce_whatsapp_number', '237681050506');
                    $msg = "Bonjour, je suis intéressé par " . get_the_title();
                    ?>
                    <a href="https://wa.me/<?php echo $num; ?>?text=<?php echo urlencode($msg); ?>"
                        class="btn btn-buy-now" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Chat sur WhatsApp
                    </a>

                    <button class="btn-wishlist"><i class="far fa-heart"></i> Ajouter aux favoris</button>
                </div>
            </div>
        </form>


        <div class="tabs">
            <button class="tab-button active" data-id="description">Description</button>
            <button class="tab-button" data-id="specifications">Spécifications</button>
            <?php if (comments_open() || get_comments_number()) : ?>
                <button class="tab-button" data-id="reviews">Avis</button>
            <?php endif; ?>
        </div>

        <div id="description" class="tab-content active">
            <h2>Description du produit</h2>
            <?php the_content(); ?>
        </div>

        <div id="specifications" class="tab-content">
            <h2>Spécifications techniques</h2>
            <?php
            if ($product->has_attributes()) {
                echo '<ul>';
                foreach ($product->get_attributes() as $attribute) {
                    if ($attribute->get_visible()) {
                        echo '<li><strong>' . wc_attribute_label($attribute->get_name()) . ':</strong> ';
                        echo $attribute->is_taxonomy()
                            ? implode(', ', wp_list_pluck(wp_get_post_terms($product->get_id(), $attribute->get_name()), 'name'))
                            : $attribute->get_options_string();
                        echo '</li>';
                    }
                }
                echo '</ul>';
            } else {
                echo '<p>Aucune spécification disponible.</p>';
            }
            ?>
        </div>

        <?php if (comments_open() || get_comments_number()) : ?>
            <div id="reviews" class="tab-content">
                <h2>Avis des clients</h2>
                <?php comments_template(); ?>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>

</div>



<script>
    function changeImage(el) {
        const main = document.getElementById('mainImage');
        document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
        el.classList.add('active');

        const full = el.dataset.full || el.src;
        main.src = full;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.tab-button');
        const contents = document.querySelectorAll('.tab-content');

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.id;
                buttons.forEach(b => b.classList.remove('active'));
                contents.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                document.getElementById(id).classList.add('active');
            });
        });
    });
</script>

<?php get_footer('shop'); ?>