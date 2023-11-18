<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hasora_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
			// Banner image and text template
			get_template_part( 'template-parts/banner', 'image' );
			// ACF output for privacy policy 
			if ( function_exists('get_field') ) :
				echo 'test';
				if (get_field('privacy_policy')) :
					the_field('privacy_policy');
				endif;
			endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
