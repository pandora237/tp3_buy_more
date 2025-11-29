<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.9.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


do_action('woocommerce_before_customer_login_form');
?>

<div class="custom-auth-wrapper container">

	<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
		<div class="u-columns col2-set" id="customer_login">
			<div class="u-column1 col-1">
			<?php endif; ?>

			<!-- ==================== CONNEXION ==================== -->
			<form method="post" class="form-auth " novalidate>

				<div class="page-intro">
					<h1>Login</h1>
					<p>Entre ton adresse e-mail pour te connecter et profiter</p>
				</div>

				<?php do_action('woocommerce_login_form_start'); ?>

				<div class="form-group   form-row form-row-wide">
					<label for="username"><?php esc_html_e('Email ou nom d’utilisateur', 'woocommerce'); ?> <span class="required">*</span></label>
					<input type="text"
						class="  input-text"
						name="username"
						id="username"
						autocomplete="username"
						value="<?php echo (! empty($_POST['username'])) ? esc_attr($_POST['username']) : ''; ?>"
						required />
					<i class="fas fa-check-circle"></i>
					<i class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>

				<div class="form-group   form-row form-row-wide">
					<label for="password"><?php esc_html_e('Mot de passe', 'woocommerce'); ?> <span class="required">*</span></label>
					<div style="position: relative;">
						<input type="password"
							class=" --text input-text"
							name="password"
							id="password"
							autocomplete="current-password"
							style="padding-right: 40px;"
							required />
					</div>
					<!-- <i class="fas fa-check-circle"></i> -->
					<i class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>

				<div id="messageErreur" style="margin:15px 0; font-weight:bold; font-size:14px; color:var(--col-danger, red);"></div>

				<?php do_action('woocommerce_login_form'); ?>

				<p class="form-row">
					<label class=" ">
						<input class=" " name="rememberme" type="checkbox" id="rememberme" value="forever" />
						<span><?php esc_html_e('Rester connecté', 'woocommerce'); ?></span>
					</label>

					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
					<button type="submit"
						class="btn btn-secondary"
						name="login"
						value="<?php esc_attr_e('Se connecter', 'woocommerce'); ?>">
						<?php esc_html_e('Se connecter', 'woocommerce'); ?>
					</button>
				</p>

				<p class="woocommerce-LostPassword lost_password">
					<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Mot de passe oublié ?', 'woocommerce'); ?></a>
				</p>

				<?php do_action('woocommerce_login_form_end'); ?>
			</form>

			<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
			</div>

			<!-- ==================== INSCRIPTION ==================== -->
			<div class="u-column2 col-2">
				<form method="post" class="form-auth " <?php do_action('woocommerce_register_form_tag'); ?>>

					<div class="page-intro">
						<h1>Register</h1>
						<p>Entre tes informations pour t’inscrire et acheter</p>
					</div>

					<?php do_action('woocommerce_register_form_start'); ?>

					<!-- Champs personnalisés supplémentaires (facultatifs) -->
					<div class="form-group   form-row form-row-wide">
						<label for="reg_first_name"><?php _e('Prénom', 'woocommerce'); ?> <span class="required">*</span></label>
						<input type="text" class=" input-text" name="first_name" id="reg_first_name" required />
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-exclamation-circle"></i>
						<small>Error message</small>
					</div>

					<div class="form-group   form-row form-row-wide">
						<label for="reg_last_name"><?php _e('Nom', 'woocommerce'); ?> <span class="required">*</span></label>
						<input type="text" class=" input-text" name="last_name" id="reg_last_name" required />
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-exclamation-circle"></i>
						<small>Error message</small>
					</div>

					<div class="form-group    form-row form-row-wide">
						<label for="reg_email"><?php esc_html_e('Email', 'woocommerce'); ?> <span class="required">*</span></label>
						<input type="email" class=" input-text" name="email" id="reg_email" autocomplete="email" required />
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-exclamation-circle"></i>
						<small>Error message</small>
					</div>

					<!-- Téléphone (optionnel) -->
					<div class="form-group   form-row form-row-wide">
						<label for="reg_phone"><?php _e('Téléphone', 'woocommerce'); ?></label>
						<input type="tel" class=" input-text" name="phone" id="reg_phone" placeholder="+237 6XX XX XX XX" value="+237 " />
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-exclamation-circle"></i>
						<small>Error message</small>
					</div>

					<?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
						<div class="form-group   form-row form-row-wide">
							<label for="reg_password"><?php esc_html_e('Mot de passe', 'woocommerce'); ?> <span class="required">*</span></label>
							<div style="position: relative;">
								<input type="password" class=" input-text" name="password" id="reg_password" style="padding-right:40px;" required />
							</div>
							<i class="fas fa-check-circle"></i>
							<i class="fas fa-exclamation-circle"></i>
							<small>Error message</small>
							<div id="passwordCriteria"></div>
						</div>
					<?php endif; ?>

					<?php do_action('woocommerce_register_form'); ?>

					<div id="messageErreur" style="margin:10px 0; color:var(--col-danger, red);"></div>

					<p class=" form-row">
						<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
						<button type="submit"
							class="btn btn-secondary"
							name="register"
							value="<?php esc_attr_e('S\'inscrire', 'woocommerce'); ?>">
							<?php esc_html_e('S\'inscrire', 'woocommerce'); ?>
						</button>
					</p>

					<?php do_action('woocommerce_register_form_end'); ?>
				</form>
			</div>
		</div>
	<?php endif; ?>

	<!-- <div class="social-login">
		<p>Ou continuer avec</p>
		<div class="social-buttons">
			<a href="#" class="social-btn google"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/other/google.svg" alt="Google"></a>
			<a href="#" class="social-btn facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/other/facebook.svg" alt="Facebook"></a>
			<a href="#" class="social-btn apple"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/other/apple.svg" alt="Apple"></a>
		</div>
	</div> -->

</div>

<?php do_action('woocommerce_after_customer_login_form'); ?>