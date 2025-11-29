<?php
defined('ABSPATH') || exit;

get_header();

do_action('woocommerce_shop_loop_header');

echo '<section class="main section-content">';

echo '<div class="filtre">';
echo '    <div class="content-filtre">';
echo '        <h2>Filtre</h2>';



echo '        <div class="items-filter">';

//  éléments classiques de woocommerce_before_shop_loop 
woocommerce_output_all_notices();
woocommerce_result_count();
woocommerce_catalog_ordering();

// Ton filtre personnalisé 
?>
<!-- <div class="filter-group">
	<label for="categorie">Catégorie :</label>
	<select id="categorie" name="product_cat" class="woocommerce-category-filter">
		<option value="">Toutes les catégories</option>
		<?php
		$terms = get_terms(array(
			'taxonomy' => 'product_cat',
			'hide_empty' => true,
		));
		if (!empty($terms) && !is_wp_error($terms)) {
			foreach ($terms as $term) {
				$selected = isset($_GET['product_cat']) && $_GET['product_cat'] === $term->slug ? 'selected' : '';
				echo '<option value="' . esc_attr($term->slug) . '" ' . $selected . '>' . esc_html($term->name) . '</option>';
			}
		}
		?>
	</select>
</div> -->

<div class="filter-group">
	<div class="slider-container">
		<span>Prix</span>
		<input type="range" min="0" max="1000" value="0" id="minRange">
	</div>
</div>

<div class="content-filter">
	<div class="filter-group">
		<label>
			<input type="checkbox" name="stock" value="1" <?php checked(isset($_GET['stock']), true); ?>>
			En stock uniquement
		</label>
	</div>
	<div class="filter-group">
		<label>
			<input type="checkbox" name="onsale" value="1" <?php checked(isset($_GET['onsale']), true); ?>>
			En promotion
		</label>
	</div>
	<div class="filter-group">
		<label>
			<input type="checkbox" name="new" value="1">
			Nouveau
		</label>
	</div>
</div>
<?php

echo '        </div>';
echo '    </div>';
echo '</div>';

if (woocommerce_product_loop()) {

	echo '<div class="content-product">';

	if (wc_get_loop_prop('total')) {
		while (have_posts()) {
			the_post();
			do_action('woocommerce_shop_loop');
			wc_get_template_part('content', 'product');
		}
	}

	woocommerce_product_loop_end();

	// Pagination
	do_action('woocommerce_after_shop_loop');

	echo '</div>';
} else {
	do_action('woocommerce_no_products_found');
}

echo '</section>';

get_footer();
?>