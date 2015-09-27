<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_WooCommerce
 * @since Twenty Sixteen WooCommerce 1.0.0
 */
?>

		</div><!-- .site-content -->

		<?php
		/**
		 * Fires just before the footer element.
		 *
		 * @since Twenty Sixteen WooCommerce 1.0.0
		 */
		do_action( 'twentysixteen_before_footer' ); ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php
			/**
			 * Fires inside the footer element.
			 *
			 * @since Twenty Sixteen WooCommerce 1.0.0
			 *
			 * @see twentysixteen_footer_primary_menu() - Priority 10
			 * @see twentysixteen_footer_social_menu()  - Priority 20
			 */
			do_action( 'twentysixteen_footer' );?>

			<div class="site-info">
				<?php
				/**
				 * Fires before the twentysixteen footer text for footer customization.
				 *
				 * @since Twenty Sixteen WooCommerce 1.0.0
				 */
				do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->

		</footer><!-- .site-footer -->

		<?php
		/**
		 * Fires after the closing footer element.
		 *
		 * @since Twenty Sixteen WooCommerce 1.0.0
		 */
		do_action( 'twentysixteen_after_footer' ); ?>

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
