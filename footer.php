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

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
