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
		get_template_part( 'template-parts/banner', 'image' );

		if ( function_exists('get_field')): 
			if (get_field('services_message')): ?>
				<p><?php the_field('services_message')?></p><?php
			endif; 

			// ACF Repeater Field
			if( have_rows('service') ): ?>
			<section class="services-title">
				<?php
				while( have_rows('service') ) :
				the_row(); ?>
				<div>
					<img src="<?php echo get_template_directory_uri() . '/images/service.png'; ?>" />
					<h2><?php the_sub_field('title'); ?></h2>
				</div>
				<?php
				endwhile;
				?>
			</section>

			<section class="services-detail">
				<?php
				while( have_rows('service') ) : 
				the_row(); ?>
				<article>
					<div>
						<?php $image = get_sub_field('image');
						echo wp_get_attachment_image( $image, 'full' ); ?>
						<h2><?php the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('description'); ?></p>
					</div>
				</article>
				<?php
				endwhile; 
				?>
			</section><?php	
			endif;
		endif;
		/* CTA Shopify */
		get_template_part( 'template-parts/content', 'cta-shopify' ); 
		?>

	</main><!-- #main -->

<?php

get_footer();
