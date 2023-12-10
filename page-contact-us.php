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
			?>
			
			<!-- Contact form section -->
			<section class="contact-form">
			<!-- Ninja Forms plugin -->
			<?php echo do_shortcode( '[ninja_form id=3]' ); ?>
    		</section>


		<?php
			// CTA SNS template
			get_template_part( 'template-parts/cta', 'sns' );
		?>

	</main><!-- #main -->

<?php
get_footer();
