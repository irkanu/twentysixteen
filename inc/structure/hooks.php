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
 * @see twentysixteen_site_header()
 */
add_action( 'twentysixteen_header', 'twentysixteen_site_branding',                      0 );
add_action( 'twentysixteen_header', 'twentysixteen_site_navigation',                    10 );

/**
 * Primary Navigation
 *
 * @see twentysixteen_main_navigation()
 */
add_action( 'twentysixteen_main_navigation', 'twentysixteen_primary_menu',              0 );

/**
 * Social Navigation
 *
 * @see twentysixteen_social_navigation()
 */
add_action( 'twentysixteen_social_navigation', 'twentysixteen_social_menu',             0 );

/**
 * After Site Header Main
 *
 * @see twentysixteen_after_site_header_main()
 */
add_action( 'twentysixteen_after_site_header_main', 'twentysixteen_site_header_image',  0 );
