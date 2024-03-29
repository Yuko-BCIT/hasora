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
				<p><?php the_field('home_message')?></p>
				<?php
			endif;
		endif; ?>

		<!-- Link to other pages -->
		<?php 
		if ( function_exists('get_field')): ?>
			<section class="page-links">
				<!-- Hasoraのこと -->
					<?php 
					if (get_field('home_about_title')): ?>
				<article>
					<h2><?php the_field('home_about_title') ?></h2>
					<?php 
					endif; ?>

					<?php 
					if (get_field('home_about_image')): 
						$image	= get_field('home_about_image');
						$size	= 'medium'; // (thumbnail, medium, large, full or custom size) ?>
					<div><?php echo wp_get_attachment_image($image,$size); ?></div>
					<?php 
					endif; ?>

					<div>
					<?php 
					if (get_field('home_about_paragraph')): ?>
						<p><?php the_field('home_about_paragraph') ?></p>
						<?php 
					endif; ?>
						
					<?php 
					if (get_field('home_about_link')): ?>
						<p class="animated-button">
							<a href="<?php esc_url(the_field('home_about_link'));?>"><?php esc_html_e( 'Learn More' ); ?></a>
						</p>
					<?php 
					endif; ?>
					</div>
				</article>

				<!-- Hasoraのサービス -->
					<?php 
					if (get_field('home_services_title')): ?>
				<article>
					<h2><?php the_field('home_services_title') ?></h2>
					<?php 
					endif; ?>

					<?php 
					if (get_field('home_services_image')): 
						$image	= get_field('home_services_image');
						$size	= 'medium'; // (thumbnail, medium, large, full or custom size) ?>
					<div><?php echo wp_get_attachment_image($image,$size); ?></div>
					<?php 
					endif;?>
					
					<div>
					<?php 
					if (get_field('home_services_paragraph')): ?>
						<p><?php the_field('home_services_paragraph') ?></p>
					<?php 
					endif; ?>
						
					<?php 
					if (get_field('home_services_link')): ?>
						<p class="animated-button">
							<a href="<?php esc_url(the_field('home_services_link'));?>"><?php esc_html_e( 'Learn More' ); ?></a>
						</p>
					<?php 
					endif; ?>
					</div>
				</article>
			</section>
			<?php 
		endif;

		/* CTA Shopify */
		get_template_part( 'template-parts/content', 'cta-shopify' ); 
		?>
	</main><!-- #main -->

<?php
get_footer();
