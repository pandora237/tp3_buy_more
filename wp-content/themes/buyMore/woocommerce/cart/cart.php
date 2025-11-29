<?php

/**
 * Cart Page - Version personnalisée avec ton design
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
	<?php do_action('woocommerce_before_cart_table'); ?>

	<div class="wrapper" id="wrapper">
		<div class="items">

			<div class="title">
				<h3>Panier</h3>
			</div>

			<div class="content-product">

				<?php
				foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
					$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
					$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

					if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
						$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
				?>
						<div class="product <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

							<!-- Image du produit -->
							<?php
							$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image('thumbnail'), $cart_item, $cart_item_key);

							if (! $product_permalink) {
								echo $thumbnail;
							} else {
								printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
							}
							?>

							<!-- Détails -->
							<div class="details">
								<h2>
									<?php
									if (! $product_permalink) {
										echo wp_kses_post($_product->get_name());
									} else {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
									}
									?>
								</h2>

								<!-- Variations / métadonnées (ex: couleur, taille…) -->
								<?php echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok. 
								?>

								<div class="qty">
									<h4>
										<?php
										if ($_product->is_sold_individually()) {
											$min_quantity = 1;
											$max_quantity = 1;
										} else {
											$min_quantity = 0;
											$max_quantity = $_product->get_max_purchase_quantity();
										}

										$product_quantity = woocommerce_quantity_input(
											array(
												'input_name'   => "cart[{$cart_item_key}][qty]",
												'input_value'  => $cart_item['quantity'],
												'max_value'    => $max_quantity,
												'min_value'    => $min_quantity,
												'product_name' => $_product->get_name(),
											),
											$_product,
											false
										);

										echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
										?>
									</h4>

									<!-- Bouton supprimer -->
									<?php
									echo apply_filters(
										'woocommerce_cart_item_remove_link',
										sprintf(
											'<a href="%s" class="btn btn-danger" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="fa-solid fa-trash"></i> Supprimer</a>',
											esc_url(wc_get_cart_remove_url($cart_item_key)),
											esc_attr__('Supprimer cet article', 'woocommerce'),
											esc_attr($product_id),
											esc_attr($cart_item_key),
											esc_attr($_product->get_sku())
										),
										$cart_item_key
									);
									?>
								</div>
							</div>

							<!-- Prix -->
							<div class="price">
								<p><?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?></p>
							</div>
						</div>
				<?php
					}
				}
				?>

				<?php do_action('woocommerce_cart_contents'); ?>

				<div class="actions-update-cart">

					<?php if (wc_coupons_enabled()) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input type="text" name="coupon_code" class="input-primary" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" /> <button type="submit" class="btn btn-secondary <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
							<?php do_action('woocommerce_cart_coupon'); ?>
						</div>
					<?php } ?>
					<button type="submit" class="btn btn-primary <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

					<?php do_action('woocommerce_cart_actions'); ?>

					<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
				</div>

				<?php do_action('woocommerce_after_cart_contents'); ?>
			</div>

			<!-- Total + bouton commander -->
			<div class="total" id="total">
				<h3>Prix Total</h3>
				<h3 class="total-val"><?php echo WC()->cart->get_cart_total(); ?></h3>
				<button type="button" class="commander" onclick="window.location.href='<?php echo esc_url(wc_get_checkout_url()); ?>'">
					Commander le panier
				</button>
			</div>

		</div>
	</div>

	<?php do_action('woocommerce_after_cart_table'); ?>
</form>

<?php do_action('woocommerce_before_cart_collaterals'); ?>