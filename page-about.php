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

			// ACF output
			if ( function_exists('get_field') ) :
				if ( get_field('about_message')) :
					?>
					<p class="about-message"><?php echo the_field('about_message'); ?></p>
					<?php
				endif;
				?>

				<!-- Company information -->
				<section class="company-info">
				<?php
				if ( get_field('company_info_title')) :
					?>
					<h2><?php echo the_field('company_info_title'); ?></h2>
					<?php
				endif;
				
				if ( get_field('company_name')) :
					?>
					<p><?php echo the_field('company_name'); ?></p>
					<?php
				endif;

				if ( get_field('company_address')) :
					?>
					<p><?php echo the_field('company_address'); ?></p>
					<?php
				endif;

				if ( get_field('company_ceo')) :
					?>
					<p><?php echo the_field('company_ceo'); ?></p>
					<?php
				endif;

				if ( get_field('company_founded')) :
					?>
					<p><?php echo the_field('company_founded'); ?></p>
					<?php
				endif;

				if ( get_field('business_details')) :
					?>
					<p><?php echo the_field('business_details'); ?></p>
					<?php
				endif;
				?>
				</section>

				<!-- EC site information -->
				<section class="ecsite-info">
				<?php
				if ( get_field('ecsite_image')) :
					$image = get_field('ecsite_image');
					$size = 'large'; // (thumbnail, medium, large, full or custom size)
					if( $image ) :
						echo wp_get_attachment_image( $image, $size );
					endif;
				endif;

				if ( get_field('ecsite_message')) :
					?>
					<p><?php echo the_field('ecsite_message'); ?></p>
					<?php
				endif;
				?>
				</section>

				<?php
			endif;
			// End of ACF output

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
