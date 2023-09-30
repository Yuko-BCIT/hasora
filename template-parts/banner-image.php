<?php
/**
 * Template part for displaying banner image and text
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hasora_Theme
 */
?>

    <header class="entry-header">
        <!-- Banner image output -->
        <?php hasora_theme_post_thumbnail(); ?>
        
        <!-- Banner text output -->
		<section class="banner-text"> 
            <!-- h1 output for page title -->
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</section>
    </header><!-- .entry-header -->