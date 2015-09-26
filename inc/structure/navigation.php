<?php
/**
 * Template functions used for the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 */

if ( ! function_exists( 'twentysixteen_primary_menu' ) ) {

	/**
	 * Primary menu
	 * @since 1.0.0
	 * @return void
	 */
	function twentysixteen_primary_menu() {
		?>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label='<?php _e( 'Primary Menu', 'twentysixteen' ); ?>'>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
				) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<?php
	}
}

if ( ! function_exists( 'twentysixteen_social_menu' ) ) {

	/**
	 * Social menu
	 * @since 1.0.0
	 * @return void
	 */
	function twentysixteen_social_menu() {
		?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation" aria-label='<?php _e( 'Social Links Menu', 'twentysixteen' ); ?>'>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<?php
	}
}