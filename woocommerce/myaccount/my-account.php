<?php

/**
 * woocommerce | Mi cuenta
 *
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * para actualizaciones 
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */

?>
<div class="my-account-page__content-account">
	<div class="my-account-page__content-account--navigation">
		<?php do_action('woocommerce_account_navigation'); ?>
	</div>


	<div class="my-account-page__content-account--content woocommerce-MyAccount-content">
		<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action('woocommerce_account_content');
		?>
	</div>
</div>