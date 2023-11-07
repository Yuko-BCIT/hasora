<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hasora_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- Footer Menu -->
		<nav id="footer-navigation" class="footer-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
		</nav>

		<div class="site-info">
			<a href="<?php echo esc_url( __( '#' ) ); ?>">
			<?php
			get_template_part('images/logo'); // Logo icon
			esc_html_e( 'Hasora' );
			?>
			</a>
		</div><!-- .site-info -->
		<!-- SNS Links -->
		<nav id="social-menu" class="social-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'sns') ); ?>
		</nav>
		
		<div>
			<a href="<?php echo esc_url( __( '#' ) ); ?>">
				<?php esc_html_e( '&copy;' );
				echo date("Y"); ?> <!-- get current year -->
				<?php esc_html_e( 'Hasora&nbsp; All Rights Reserved.' ); ?>
			</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
