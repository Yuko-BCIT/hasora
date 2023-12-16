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

			// ACF output
			if ( function_exists('get_field') ) :
				if ( get_field('about_message')) :
					?>
					<p class="about-message"><?php the_field('about_message'); ?></p>
					<?php
				endif;
				?>

				<!-- Company information -->
				<section class="company-info">
				<?php
				if ( get_field('company_info_title')) :
					?>
					<h2><?php the_field('company_info_title'); ?></h2>
					<?php
				endif;
				?>
					<table>
						<tbody>
						<?php
						if ( get_field('company_name')) :
							?>
							<tr>
								<td><?php esc_html_e( '会社名' ); ?></td>
								<td><?php the_field('company_name'); ?></td>
							</tr>
							<?php
						endif;

						if ( get_field('company_address')) :
							?>
							<tr>
								<td><?php esc_html_e( '所在地' ); ?></td>
								<td><?php the_field('company_address'); ?></td>
							</tr>
							<?php
						endif;

						if ( get_field('company_ceo')) :
							?>
							<tr>
								<td><?php esc_html_e( '代表者' ); ?></td>
								<td><?php the_field('company_ceo'); ?></td>
							</tr>
							<?php
						endif;

						if ( get_field('company_founded')) :
							?>
							<tr>
								<td><?php esc_html_e( '設立' ); ?></td>
								<td><?php the_field('company_founded'); ?></td>
							</tr>
							<?php
						endif;

						if ( get_field('business_details')) :
							?>
							<tr>
								<td><?php esc_html_e( '事業内容' ); ?></td>
								<td><?php the_field('business_details'); ?></td>
							</tr>
							<?php
						endif;
						?>
						</tbody>
					</table>
				</section>
				<?php
			endif;
			
			/* CTA Shopify */
			get_template_part( 'template-parts/content', 'cta-sns' ); 
		?>

	</main><!-- #main -->

<?php
get_footer();
