<?php
/**
 * WooCommerce related functions.
 *
 * @package Twenty_Sixteen_WooCommerece
 */

/**
 * First of all, let's declare WooCommerce support!
 */
function twentysixteen_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'twentysixteen_woocommerce_support' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper',     10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end',  10);

/**
 * Inject Twenty Sixteen wrapper start.
 */
function twentysixteen_wrapper_start() {
	echo '<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">';
}
add_action('woocommerce_before_main_content', 'twentysixteen_wrapper_start', 10);

/**
 * Inject Twenty Sixteen wrapper end.
 */
function twentysixteen_wrapper_end() {
	echo '</div><!-- .content-area -->
		</main><!-- .site-main -->';
}
add_action('woocommerce_after_main_content', 'twentysixteen_wrapper_end', 10);
