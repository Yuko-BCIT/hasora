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
		<!-- SNS Links -->
		<nav id="social-menu" class="social-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'sns') ); ?>
		</nav>
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hasora-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'hasora-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'hasora-theme' ), 'hasora-theme', '<a href="http://underscores.me/">Makiko Ono, Yuko Kitahata, Josy Li</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
