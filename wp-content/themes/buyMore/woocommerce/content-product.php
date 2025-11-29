<?php

/**
 * Template pour l'affichage des produits dans les boucles (shop, archives, etc.)
 * Structure personnalisée identique à ton exemple HTML
 */

defined('ABSPATH') || exit;

global $product;

// Sécurité : on vérifie que c’est bien un produit WooCommerce visible
if (!is_a($product, 'WC_Product') || !$product->is_visible()) {
	return;
}

// Lien du produit
$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

// Note moyenne et nombre d'avis
$rating_count   = $product->get_rating_count();
$average_rating = $product->get_average_rating();

// Prix
$price_html = $product->get_price_html();

?>
<div class="box-product">

	<div class="image">
		<a href="<?php echo esc_url($link); ?>">
			<?php echo woocommerce_get_product_thumbnail(); ?>
		</a>
	</div>

	<div class="content">
		<div class="description">
			<h3>
				<a href="<?php echo esc_url($link); ?>">
					<?php the_title(); ?>
				</a>
			</h3>

			<?php if ($product->get_short_description()) : ?>
				<p><?php echo wp_kses_post($product->get_short_description()); ?></p>
			<?php else : ?>
				<p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
			<?php endif; ?>

			<div class="rating-and-like">
				<div class="rating">
					<?php echo wc_get_rating_html($average_rating, $rating_count); ?>
				</div>

				<button class="like-btn" type="button" data-product-id="<?php echo $product->get_id(); ?>">
					<i class="fa-regular fa-heart"></i>
				</button>
			</div>

			<?php if ($price_html) : ?>
				<p class="price"><?php echo $price_html; ?></p>
			<?php endif; ?>
		</div>

		<a href="<?php echo esc_url($link); ?>" class="btn btn-secondary position-btn">
			Découvrir
		</a>
	</div>

</div>