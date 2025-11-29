<?php

/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$current_user = wp_get_current_user();
$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
	'strong' => array(),
);
?>

<!-- ============================================================= -->
<!-- ==================== TON CONTENU PERSONNALISÉ =============== -->
<!-- ============================================================= -->

<div class="header">
	<h1>Mon Compte</h1>
	<p>Gérez vos informations personnelles</p>
</div>

<h2 class="sub-title">Informations personnelles</h2>

<div class="info content-grid">
	<div class="info-grid" id="info-grid">

		<div class="info-card">
			<div class="info-label">
				<i class="fa-solid fa-user"></i> Nom complet
			</div>
			<div class="info-value">
				<?php echo esc_html($current_user->first_name . ' ' . $current_user->last_name); ?>
			</div>
		</div>

		<div class="info-card">
			<div class="info-label">
				<i class="fa-solid fa-envelope"></i> Email
			</div>
			<div class="info-value"><?php echo esc_html($current_user->user_email); ?></div>
		</div>

		<?php if ($phone = get_user_meta($current_user->ID, 'billing_phone', true)) : ?>
			<div class="info-card">
				<div class="info-label">
					<i class="fa-solid fa-phone"></i> Téléphone
				</div>
				<div class="info-value"><?php echo esc_html($phone); ?></div>
			</div>
		<?php endif; ?>

		<div class="info-card">
			<div class="info-label">
				<i class="fa-solid fa-calendar"></i> Date d'inscription
			</div>
			<div class="info-value">
				<?php echo esc_html(date_i18n('d F Y', strtotime($current_user->user_registered))); ?>
			</div>
		</div>

	</div>
</div>


<hr class="woocommerce-dashboard-separator" style="margin: 40px 0; border-color: #eee;">

<!-- ============================================================= -->
<!-- ========= CONTENU PAR DÉFAUT DE WOOCOMMERCE (après) ========= -->
<!-- ============================================================= -->

<p>
	<?php
	printf(
		wp_kses(__('Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce'), $allowed_html),
		'<strong>' . esc_html($current_user->display_name) . '</strong>',
		esc_url(wc_logout_url())
	);
	?>
</p>

<p>
	<?php
	$dashboard_desc = __('From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce');

	if (wc_shipping_enabled()) {
		$dashboard_desc = __('From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce');
	}

	printf(
		wp_kses($dashboard_desc, $allowed_html),
		esc_url(wc_get_endpoint_url('orders')),
		esc_url(wc_get_endpoint_url('edit-address')),
		esc_url(wc_get_endpoint_url('edit-account'))
	);
	?>
</p>

<?php
/**
 * Action hook qui permet à d'autres plugins/thèmes d'ajouter du contenu
 */
do_action('woocommerce_account_dashboard');

/**
 * Hooks dépréciés (gardés pour compatibilité)
 */
do_action('woocommerce_before_my_account');
do_action('woocommerce_after_my_account');
