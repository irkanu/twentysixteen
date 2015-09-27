<?php
/**
 * TwentySixteen WooCommerce Hooks
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 */

/**
 * Before Header
 *
 * @see twentysixteen_skip_links() - Priority 10
 */
add_action( 'twentysixteen_before_header', 'twentysixteen_skip_links', 10 );

/**
 * Header
 *
 * @see twentysixteen_site_branding() - Priority 10
 */
add_action( 'twentysixteen_header', 'twentysixteen_site_branding', 10 );

/**
 * Header Menu
 *
 * @see twentysixteen_header_primary_menu() - Priority 10
 * @see twentysixteen_header_social_menu() - Priority 20
 */
add_action( 'twentysixteen_header_menu', 'twentysixteen_header_primary_menu', 10 );
add_action( 'twentysixteen_header_menu', 'twentysixteen_header_social_menu', 20 );

/**
 * After Site Header Main
 *
 * @see twentysixteen_site_header_image() - Priority 10
 */
add_action( 'twentysixteen_after_site_header_main', 'twentysixteen_site_header_image', 10 );

/**
 * Sidebar
 *
 * @see twentysixteen_get_sidebar() - Priority 10
 */
add_action( 'twentysixteen_sidebar', 'twentysixteen_get_sidebar', 10 );

/**
 * Footer
 *
 * @see twentysixteen_footer_primary_menu() - Priority 10
 * @see twentysixteen_footer_social_menu() - Priority 20
 */
add_action( 'twentysixteen_footer', 'twentysixteen_footer_primary_menu', 10 );
add_action( 'twentysixteen_footer', 'twentysixteen_footer_social_menu', 20 );
