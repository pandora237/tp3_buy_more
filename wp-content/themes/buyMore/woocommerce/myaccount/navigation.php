<?php

/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.3.0
 */

if (! defined('ABSPATH')) {
	exit;
}

do_action('woocommerce_before_account_navigation');

$current_user = wp_get_current_user();
?>

<nav class="woocommerce-MyAccount-navigation" aria-label="<?php esc_html_e('Account pages', 'woocommerce'); ?>">
	<aside class="sideBar" id="sideBar">
		<!-- Profil utilisateur -->
		<div class="profile-section">
			<div class="avatar">
				<?php echo strtoupper(substr($current_user->display_name, 0, 2)); ?>
			</div>
			<div class="profile-name"><?php echo esc_html($current_user->display_name); ?></div>
			<div class="profile-email"><?php echo esc_html($current_user->user_email); ?></div>
		</div>

		<!-- Menu de navigation -->
		<ul>
			<?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
				<?php
				// Classe active
				$is_active = wc_is_current_account_menu_item($endpoint);
				$classes   = ['menu-item'];
				if ($is_active) {
					$classes[] = 'active';
				}

				// Icônes personnalisées  
				$icon = '';
				switch ($endpoint) {
					case 'dashboard':
					case 'edit-account':
						$icon = 'fa fa-user';
						break;
					case 'orders':
						$icon = 'fa fa-shopping-cart';
						break;
					case 'downloads':
					case 'edit-address':
					case 'payment-methods':
					case 'customer-logout':
						$icon = 'fa fa-sign-out-alt';
						break;
					default:
						$icon = 'fa fa-circle';
				}

				if ($endpoint === 'customer-logout') {
					$classes[] = 'deconnexion btn-danger';
				}
				?>
				<li>
					<a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"
						class="<?php echo esc_attr(implode(' ', $classes)); ?>"
						<?php echo $is_active ? 'aria-current="page"' : ''; ?>>

						<?php if ($icon) : ?>
							<i class="<?php echo esc_attr($icon); ?>"></i>
						<?php endif; ?>

						<span class="item-aside"><?php echo esc_html($label); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		</ul>
	</aside>
</nav>

<?php do_action('woocommerce_after_account_navigation'); ?>