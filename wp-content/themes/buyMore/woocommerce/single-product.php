<?php
if (! defined('ABSPATH')) {
	exit; // Sécurité
}

get_header('shop'); // Charge header-shop.php si existant
?>

<div class="product-page">

	<?php
	// Breadcrumb WooCommerce (optionnel)
	if ( function_exists('woocommerce_breadcrumb') ) {
		woocommerce_breadcrumb();
	}
	?>

	<div class="product-detail">

		<div class="product-gallery">
			<?php
			// Affiche la galerie WooCommerce
			do_action('woocommerce_before_single_product_summary'); 
			?>
		</div>

		<div class="product-info">
			<?php
			// Titre, prix, options et add to cart
			do_action('woocommerce_single_product_summary');
			?>
		</div>

	</div>

	<div class="product-tabs">
		<?php
		// Description, spécifications, reviews via WooCommerce
		do_action('woocommerce_after_single_product_summary');
		?>
	</div>

</div>

<?php
// Supprime la sidebar si tu veux full-width
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

get_footer('shop');
