<?php
/**
 * Template part for displaying CTA Hasora EC site on Shopify
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hasora_Theme
 */
?>

<section class="cta-shopify">
    <?php 
    if ( function_exists('get_field') ) :
        // Title
        if (get_field('title','options')) : ?>
            <p><?php echo esc_html(get_field('title','options')); ?></p><?php
        endif;

        // Description
        if (get_field('paragraph','options')) :
            ?>
            <p><?php echo esc_html(get_field('paragraph','options')); ?></p>
            <?php
        endif;
        // Shop Link
        if (get_field('shop_link','options')) :
            $link       = get_field('shop_link','options');
            $link_url   = $link['url'];
            $link_title = $link['title'];
            ?>
            <a href="<?php echo esc_url($link_url)?>"><?php echo esc_html($link_title)?></a>
            <?php
        endif;
        // image
        if (get_field('image','options')) :
            $image  = get_field('image','options');
            $image_url  = $image['url'];
            $image_alt  = $image['alt'];
            ?>
            <img src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
            <?php
        endif;
    endif;
        ?>
</section>