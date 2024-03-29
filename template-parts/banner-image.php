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
        <?php 
        $page_id = get_the_ID();
        if ($page_id == 11):
        ?>
            <?php hasora_theme_post_thumbnail('thumbnail', array( 'class' => 'parallex' )); ?>
        <?php
        else:
        ?>
            <?php hasora_theme_post_thumbnail(); ?>
        <?php
        endif;
        ?>

        <!-- Banner text output -->
		<section class="banner-text"> 
            <!-- h1 output for page title -->
			<?php
            if (is_front_page()):
                // Home page
                the_title( '<h1 class="entry-title screen-reader-text">', '</h1>' ); 
                if ( function_exists('get_field') ) :
                    if ( get_field('marketing_copy') ) ; ?> 
                        <p><?php the_field('marketing_copy'); ?></p><?php
                endif;

            else: // Other pages
                the_title( '<h1 class="entry-title">', '</h1>' ); 
            endif;            
            ?>
		</section>
    </header><!-- .entry-header -->