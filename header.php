<?php
/**
 * The header for our theme.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 * @since Twenty Sixteen 1.0
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
		 * Before header hook.
		 *
		 * @see twentysixteen_skip_links - 0
		 */
		do_action( 'twentysixteen_before_header' ); ?>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">

				<?php
				/**
				 * Header hook.
				 *
				 * @see twentysixteen_site_branding - 0
				 * @see twentysixteen_site_navigation - 10
				 */
				do_action( 'twentysixteen_header' ); ?>

			</div><!-- .site-header-main -->

			<?php
			/**
			 * After site header main hook.
			 *
			 * @see twentysixteen_site_header_image - 0
			 */
			do_action( 'twentysixteen_after_site_header_main' ); ?>

		</header><!-- .site-header -->

		<div id="content" class="site-content">
