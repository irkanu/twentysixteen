<?php
/**
 * The header for our theme.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 * @since Twenty Sixteen WooCommerce 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php echo twentysixteen_html_tag_schema(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="site-inner">

		<?php
		/**
		 * Fires before the header element.
		 *
		 * @since Twenty Sixteen WooCommerce 1.0.0
		 *
		 * @see twentysixteen_skip_links() - Priority 10
		 */
		do_action( 'twentysixteen_before_header' ); ?>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">

				<?php
				/**
				 * Fires inside .site-header-main div.
				 *
				 * @since Twenty Sixteen WooCommerce 1.0.0
				 *
				 * @see twentysixteen_site_branding() - Priority 10
				 */
				do_action( 'twentysixteen_header' ); ?>

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>

				<button id="menu-toggle" class="menu-toggle"><?php
					/**
					 * Filters the menu text to allow for modification.
					 *
					 * @since Twenty Sixteen WooCommerce 1.0.0
					 */
					_e( apply_filters( 'twentysixteen_menu_text', 'Menu' ), 'twentysixteen' ); ?>
				</button>

				<div id="site-header-menu" class="site-header-menu">

				<?php
				/**
				 * Fires inside the .site-header-menu div.
				 *
				 * @since Twenty Sixteen WooCommerce 1.0.0
				 *
				 * @see twentysixteen_header_primary_menu() - Priority 10
				 * @see twentysixteen_header_social_menu()  - Priority 20
				 */
				do_action( 'twentysixteen_header_menu' ); ?>

				</div><!-- .site-header-menu -->
			</div><!-- .site-header-main -->
			<?php endif; ?>

			<?php
			/**
			 * Fires after the .site-header-main div is closed.
			 *
			 * @since Twenty Sixteen WooCommerce 1.0.0
			 *
			 * @see twentysixteen_site_header_image() - Priority 10
			 */
			do_action( 'twentysixteen_after_site_header_main' ); ?>

		</header><!-- .site-header -->

		<div id="content" class="site-content">
