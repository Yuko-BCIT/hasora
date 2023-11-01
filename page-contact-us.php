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
		while ( have_posts() ) :
			the_post();

			// Banner image and text template
			get_template_part( 'template-parts/banner', 'image' );
			?>
			
			<!-- Contact form section -->
			<section class="contact-form">
          	<?php echo do_shortcode( '[ninja_form id=3]' ); ?>
    		</section>

			<!-- SNS section -->
			<section class="sns-links">
			<!-- Instagram feed link -->
          	<?php echo do_shortcode( '[instagram-feed feed=2]' );

          	// ACF output
			if ( function_exists('get_field') ) :
				// SNS info title
				if (get_field('sns_info_title')) : ?>
					<h2><?php the_field('sns_info_title'); ?></h2><?php
				endif;

				// Links to SNS
				if (get_field('sns_url1')) :
					$url1 = get_field('sns_url1'); ?>
					<a class="sns-url" href="<?php echo esc_url( $url1 ); ?>">Facebook</a><?php
				endif;

				if (get_field('sns_url2')) :
					$url2 = get_field('sns_url2'); ?>
					<a class="sns-url" href="<?php echo esc_url( $url2 ); ?>">Instagram</a><?php
				endif;

				if (get_field('sns_url3')) :
					$url3 = get_field('sns_url3'); ?>
					<a class="sns-url" href="<?php echo esc_url( $url3 ); ?>">YouTube</a><?php
				endif;
			endif;
			// End of ACF output
			?>
    		</section>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
