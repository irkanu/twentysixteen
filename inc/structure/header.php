<?php
/**
 * Template functions used for the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 */

if ( ! function_exists( 'twentysixteen_skip_links' ) ) :

	/**
	 * Skip links
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function twentysixteen_skip_links() {
		?>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
		<?php
	}

endif;

if ( ! function_exists( 'twentysixteen_site_branding' ) ) :

	/**
	 * Site heading
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function twentysixteen_site_branding() {
		?>

		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<?php
	}

endif;

if ( ! function_exists( 'twentysixteen_site_header_image' ) ) :

	/**
	 * Site header image
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function twentysixteen_site_header_image() {
		?>

		<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div>
		<?php endif; // End header image check. ?>

		<?php
	}

endif;
