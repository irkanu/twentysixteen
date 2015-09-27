<?php
/**
 * Template functions used for the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 */

if ( ! function_exists( 'twentysixteen_header_primary_menu' ) ) :

	/**
	 * Header primary menu
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function twentysixteen_header_primary_menu() {
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

endif;

if ( ! function_exists( 'twentysixteen_header_social_menu' ) ) :

	/**
	 * Header social menu
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function twentysixteen_header_social_menu() {
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

endif;

if ( ! function_exists( 'twentysixteen_footer_primary_menu' ) ) :

	/**
	 * Footer primary menu
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function twentysixteen_footer_primary_menu() {
		?>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="main-navigation" role="navigation" aria-label='<?php _e( 'Footer Primary Menu', 'twentysixteen' ); ?>'>
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

endif;

if ( ! function_exists( 'twentysixteen_footer_social_menu' ) ) :

	/**
	 * Footer social menu
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function twentysixteen_footer_social_menu() {
		?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation" role="navigation" aria-label='<?php _e( 'Footer Social Links Menu', 'twentysixteen' ); ?>'>
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

endif;
