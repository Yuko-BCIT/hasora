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

		/* banner image */
		get_template_part( 'template-parts/banner', 'image' ); 

		if ( function_exists('get_field')):
			if (get_field('home_message')):
				?>
				<p><?php echo the_field('home_message')?></p>
				<?php
			endif;
		endif;
		?>

		<?php if ( function_exists('get_field')): ?>
			<!-- Hasoraのこと -->
			<section>
				<?php if (get_field('home_about_title')): ?>
				<h2><?php echo the_field('home_about_title') ?></h2>
				<?php endif; ?>

				<?php 
					if (get_field('home_about_image')): 
					$image	= get_field('home_about_image');
					$size	= 'medium'; // (thumbnail, medium, large, full or custom size)
				?>
					<div><?php echo wp_get_attachment_image($image,$size); ?></div>
				<?php endif;?>


				<?php if (get_field('home_about_paragraph')): ?>
				<p><?php echo the_field('home_about_paragraph') ?></p>
				<?php endif; ?>
				
				<?php if (get_field('home_about_link')): ?>
				<a href="<?php the_field('home_about_link')?>">Learn More</a>
				<?php endif; ?>
			</section>
			<!-- Hasoraのサービス -->
			<section>
				<?php if (get_field('home_services_title')): ?>
				<h2><?php echo the_field('home_services_title') ?></h2>
				<?php endif; ?>

				<?php 
					if (get_field('home_services_image')): 
					$image	= get_field('home_services_image');
					$size	= 'medium'; // (thumbnail, medium, large, full or custom size)
				?>
					<div><?php echo wp_get_attachment_image($image,$size); ?></div>
				<?php endif;?>

				<?php if (get_field('home_services_paragraph')): ?>
				<p><?php echo the_field('home_services_paragraph') ?></p>
				<?php endif; ?>
				
				<?php if (get_field('home_services_link')): ?>
				<a href="<?php the_field('home_services_link')?>">Learn More</a>
				<?php endif; ?>
			</section>
		<?php endif;

		/* CTA Shopify */
		get_template_part( 'template-parts/content', 'cta-shopify' ); 
		?>
	</main><!-- #main -->

<?php
get_footer();
