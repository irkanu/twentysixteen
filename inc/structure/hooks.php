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
 * @see twentysixteen_skip_links()
 */
add_action( 'twentysixteen_before_header', 'twentysixteen_skip_links',                  0 );

/**
 * Header
 *
 * @see twentysixteen_site_branding()
 * @see twentysixteen_site_navigation()
 */
add_action( 'twentysixteen_header', 'twentysixteen_site_branding',                      0 );
add_action( 'twentysixteen_header', 'twentysixteen_site_navigation',                    10 );

/**
 * Primary Navigation
 *
 * @see twentysixteen_primary_menu()
 */
add_action( 'twentysixteen_main_navigation', 'twentysixteen_primary_menu',              0 );

/**
 * Social Navigation
 *
 * @see twentysixteen_social_menu()
 */
add_action( 'twentysixteen_social_navigation', 'twentysixteen_social_menu',             0 );

/**
 * After Site Header Main
 *
 * @see twentysixteen_site_header_image()
 */
add_action( 'twentysixteen_after_site_header_main', 'twentysixteen_site_header_image',  0 );

/**
 * Sidebar
 *
 * @see twentysixteen_get_sidebar()
 */
add_action( 'twentysixteen_sidebar', 'twentysixteen_get_sidebar',                       10 );
