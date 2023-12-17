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
		// while ( have_posts() ) :
		// 	the_post();

			get_template_part( 'template-parts/content', 'page' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.

		if ( function_exists('get_field')):
			?>
			<?php
			if (get_field('services_message')):
				?>
				<p><?php the_field('services_message')?></p>
				<?php
			endif;
			?>
			<?php
			if (get_field('service1_title') && get_field('service1_paragraph')):
			?>
			<section>
				<h2><?php the_field('service1_title')?></h2>
				<p><?php the_field('service1_paragraph') ?></p>
			</section>
			<?php
			endif;
			?>

			<?php
			if (get_field('service2_title') && get_field('service2_paragraph')):
			?>
			<section>
				<h2><?php the_field('service2_title')?></h2>
				<p><?php the_field('service2_paragraph') ?></p>
			</section>
			<?php
			endif;
			?>

			<?php
		endif;

		/* CTA Shopify */
		get_template_part( 'template-parts/content', 'cta-shopify' ); 
		?>

	</main><!-- #main -->

<?php

get_footer();
